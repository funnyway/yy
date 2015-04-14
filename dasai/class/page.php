<?php
class Page{
	public  $pagesize = 10;
	public $url ;
	public  $currentcls='';
	public  $focuscls='';
	private $disablecls='';
	public  $page = 1;
	private $str;
	private $total = 1;
	private  $pagecount =1;
	private $param = array();
	public function __construct($page,$total,$url,$pagesize=null,$currentcls=null) {
		$this->page = $page;
		$this->total = $total;
		if(strpos($url,'?')!==false) {
			$this->url = $url;
		}else {
			$this->url = $url.'?a=a';
		}
		if($pagesize)$this->pagesize = $pagesize;
		$this->pagecount = ceil($this->total/$this->pagesize);
		if($this->page>$this->pagecount) $this->page = 1;
		if($currentcls) $this->currentcls = $currentcls;
		if($disablecls) $this->currentcls = $currentcls;
		if($focuscls) $this->currentcls = $currentcls;
		
	}
	public function render(){
		$str = $this->getPage();
		echo $str;
	}
	protected  function getPage() {
		if($this->page > 1) {
			$previous = '<li><a href="'.$this->url.'&page='.($this->page-1).'">上页</a></li>';//上页
		}else {
			$previous = '<li><a href="#">上页</a></li>';//上页
		}
		if($this->page < $this->pagecount) {
			$next = '<li><a href="'.$this->url.'&page='.($this->page+1).'">下页</a></li>';//下页
		}else {
			$next = '<li><a class="" href="#">下页</a></li>';//下页
		}
		$first = '<li><a href="'.$this->url.'">首页</a></li>';//首页
		$last= '<li><a href="'.$this->url.'&page='.$this->pagecount.'">末页</a></li>';//末页
		
		$start = floor(($this->page-1)/10)*10+1;
		$end = $start + 9;
		$end =($end > $this->pagecount)?$this->pagecount:$end;
		$main = '';
		for($i=$start; $i <= $end; $i++) {
			if($i == $this->page) {
				$main .='<li><a class="'.$this->currentcls.'" href="#" style="color:gray">'.$i.'</a></li>';
			}else {
				$main .='<li><a href="'.$this->url.'&page='.$i.'">'.$i.'</a></li>';
			} 
		}
		return '<ul class="pagelist">'.$first.$previous.$main.$next.$last.'</ul>';
		//$str = $str.$first.$previous.
	}
}