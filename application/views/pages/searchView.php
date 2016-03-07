<div id="contents" style="background-color: #F2F2F2" onmouseover="this.bgColor='white'">
    <br/><br/><br/><br/><br/><br/><br/>
        <table align="center" bgcolor='#E6E6E6'>
            <tr>
                <th colspan="2"><h1>Actors and Movies Finder</h1></th>
            </tr>
            <tr>
                <?php echo form_open('Search/searchActor')?>
                    <td align='center'><input type="text" name="criteria" id="criteria" onFocus="this.select();" onMouseOut="javascript:return false;"/></td>
                    <td align='center'><input type="submit" name="search" value="Search" id="search"/></td>
                </form>
            </tr>
        </table>
        <!--<div align='center'><img src="templates/images/popcorn.png"/></div>-->
        <br/><br/>
        <div align="center"><?php echo $message;?></div>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</div>
