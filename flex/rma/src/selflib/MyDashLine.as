package selflib 
{
	import flash.display.Graphics;
	import flash.display.Sprite;
	import flash.geom.Point;
	import mx.core.UIComponent;
	import spark.core.SpriteVisualElement;
	public class MyDashLine 
	{ 
		/* 虚线 */
		public static const DASHLINE:String = "dashLine";
		/* 实线 */
		public static const REALLINE:String = "realLine";
		private var lines:SpriteVisualElement = new SpriteVisualElement(); 
		private var component:UIComponent = new UIComponent(); 
		public function MyDashLine() 
		{ 
			lines = new SpriteVisualElement(); 
			component = new UIComponent(); 
		} 
		/*init()函数参数注解： 
		* 1、shuliang    虚线的条数 
		* 2、lineColor   虚线的颜色 
		* 3、lineAlpha   虚线的alpha值 
		* 4、fromX       虚线起始点的x轴的值 
		* 5、fromY       虚线起始点的y轴的值 
		* 6、toX         虚线末点的x轴的值 
		* 7、toY         虚线末点的y轴的值 
		* 8、pointWidth 单个点的厚度 
		* 9、pointLength 单个点的长度 
		* 10、twoPointDistance 两个点之间的间隔 
		* 11、secondColor 虚线分段颜色，默认白色
		*/ 
		public function init(shuliang:Number, lineColor:uint, 
							 lineAlpha:Number, fromX:Number, fromY:Number, toX:Number, 
							 toY:Number, pointWidth:Number, pointLength:Number, 
							 twoPointDistance:Number, type:String="dashLine", secondColor:uint=0xFFFFFF):UIComponent
		{ 
			drawDashed(lines.graphics, lineColor, lineAlpha, new Point(fromX, fromY), 
				new Point(toX, toY), pointWidth, pointLength, twoPointDistance, type, secondColor); 
			return component; 
		} 
		public function drawDashed(graphics:Graphics, lineColor:uint, lineAlpha:Number, 
									p1:Point, p2:Point, pointWidth:Number, 
									pointLength:Number, twoPointDistance:Number, type:String, secondColor:uint):void
		{ 
			var max:Number = Point.distance(p1, p2); 
			var dis:Number = 0; 
			var p3:Point; 
			var p4:Point; 
			switch(type)
			{
				case DASHLINE:
					var p5:Point = p1;
					while(dis < max){ 
						p3 = Point.interpolate(p2, p1, dis / max); 
						dis += pointLength; 
						if(dis > max){ 
							dis = max; 
						} 
						p4 = Point.interpolate(p2, p1, dis / max);
						graphics.lineStyle(pointWidth, secondColor, lineAlpha); 
						graphics.moveTo(p5.x, p5.y);
						graphics.lineTo(p3.x, p3.y);
						graphics.lineStyle(pointWidth, lineColor, lineAlpha); 
						graphics.moveTo(p3.x, p3.y); 
						graphics.lineTo(p4.x, p4.y); 
						p5 = p4;
						dis += twoPointDistance; 
					}
					break;
				default:
				case REALLINE:
					with(graphics)
					{
						lineStyle(pointWidth, lineColor, lineAlpha);
						moveTo(p1.x, p2.y);
						lineTo(p2.x, p2.y);
					}
					break;
			}
			component.addChild(lines); 
		} 
	} 
}