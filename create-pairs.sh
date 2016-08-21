#! /usr/bin/env bash

set -eo pipefail

IFS=,

for i in "#FFCCCC","#1D609C" "#FFCCE6","#0099CC" "#FF80AA","#FFCCCC" "#CC0000","#FF66B3" "#FF80AA","#B30086" "#66CCFF","#FF8080" "#66CCFF","#FF8080" "#FFE066","#E6AC00" "#999966","#FFE066" "#D4C7EA","#E6005C" "#7575A3","#FF8080" "#66D9FF","#FF99CC" "#66D9FF","#FF99CC" "#66CCFF","#FFE066" "#66CCFF","#FFE066" "#FF5C33","#FFC299" "#FFE066","#FF9900" "#00B359","#FFB3D9" "#FFCCCC","#B3FFF0" "#00B3B3","#FFCCE6" "#FF80AA","#71DADA" "#C2C2D6","#B35900" "#DF744A","#FEDCD2" "#FFFF1A","#FFB3D9" "#FFCCE6","#C2C2D6" "#FBEC5F","#00E6AC" "#BF80FF","#336699" "#00B3B3","#CCCC00" "#CCFF99","#00B3B3" "#D4C7EA","#CCFF99" "#CCF3FF","#66CC66" "#99FFCC","#9900CC" "#FFB3D9","#9900CC" "#94618E","#F4DECB" "#FFC299","#00E6AC" "#FF3300","#66CCFF" "#B3ECFF","#B3B3B3" "#FFC299","#0099CC" "#FFC299","#8585AD" "#FFE6F3","#FFC299" "#00B3B3","#66D9FF" "#FFC299","#B30086" "#66CCFF","#1D609C" "#FF8080","#FFE066" "#99FFD6","#FF6600" "#FF8533","#9900CC" "#FF8533","#B3FFF0" "#ADEBEB","#FFC299" "#ADEBEB","#FFC299" "#D4C7EA","#8585AD"; do
	set -- $i
	post_id=$(wp post create --post_type=colourpair --porcelain)
	wp post meta set "$post_id" foreground_colour "$1"
	wp post meta set $post_id background_colour $2
done
