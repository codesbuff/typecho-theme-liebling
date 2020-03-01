<div class="l-wrapper">
  <nav class="m-pagination">
    <?php $this->pageLink('<span class="icon-arrow-left"></span>'); ?>
    <span class="m-pagination__text"><?php if($this->_currentPage>0) echo 'Page '.$this->_currentPage.' of '; ?><?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?></span>
    <?php $this->pageLink('<span class="icon-arrow-right"></span>','next'); ?>
  </nav>
</div>

<style>
.prev
{
    margin-right: 30px;
    width: 46px;
    height: 46px;
    font-size: .688rem;
    background-color: var(--background-color);
    border-radius: 50%;
    box-shadow: 0 2px 4px var(--button-shadow-color-normal),0 0 0 transparent;
    transition: all .25s cubic-bezier(.02,.01,.47,1);
    color: var(--titles-color);
    border: 0;
    outline: 0;
    padding: 0;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
}
.next
{
    margin-left: 30px;
    width: 46px;
    height: 46px;
    font-size: .688rem;
    background-color: var(--background-color);
    border-radius: 50%;
    box-shadow: 0 2px 4px var(--button-shadow-color-normal),0 0 0 transparent;
    transition: all .25s cubic-bezier(.02,.01,.47,1);
    color: var(--titles-color);
    border: 0;
    outline: 0;
    padding: 0;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>