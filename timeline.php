<?php 
	session_start();
	include_once("db.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>WELCOME</title>
	<link rel="stylesheet" href="css/bootstrap.css">

	<style type="text/css">
		#wells{
			width: 300px;
			height:300px;
		}
	</style>
</head>
<body>
	<nav class="navbar" style="background-color:#f0fff0">
		<a class="navbar-brand" href="/">Indian Tourism</a>
	<ul class="nav navbar-nav pull-right" style="list-style:none; display:inline">
		<li><a class="pull-right"href="timeline.php" title="">Home</a></li>
		<li><a href="bookticket.php" title="">Book Ticket</a></li>
		<li><a href="orders.php" title="">My Orders</a></li>
		<li><a href="logout.php" title="">Logout</a></li>
	</ul>
	</nav>
<br>
		<center><h1>WELCOME<?php echo "\t". $_SESSION['fname'];?>!</h1></center>

<!-- Map starts here -->
<div class="row">
	<center>
		<div class="well">

			<h3 class="alert alert-info">Select the state for Tourist Attractions!</h3>

			<br>
				<!-- Map Coding Starts here -->
				<p class="mwebtext"><map name="FPMap0">
			<area coords="158, 123, 146, 110, 142, 108, 137, 103, 131, 100, 130, 93, 129, 86, 129, 78, 131, 71, 135, 67, 139, 60, 138, 53, 132, 48, 125, 44, 120, 44, 117, 30, 124, 28, 130, 24, 136, 24, 141, 23, 146, 23, 149, 20, 153, 20, 159, 21, 165, 23, 167, 26, 169, 26, 176, 31, 179, 34, 182, 38, 185, 41, 187, 44, 189, 47, 194, 47, 199, 52, 199, 54, 208, 56, 213, 52, 219, 51, 227, 50, 233, 49, 239, 51, 245, 51, 247, 57, 248, 63, 248, 71, 245, 77, 242, 80, 238, 80, 237, 85, 228, 90, 226, 95, 226, 99, 230, 102, 234, 107, 234, 113, 234, 119, 227, 121, 221, 121, 218, 121, 215, 117, 211, 115, 209, 111, 201, 112, 197, 110, 191, 107, 186, 103, 180, 103, 175, 104, 174, 111, 171, 116, 168, 117, 163, 119" shape="polygon" href="JammuKashmir/jammukashmirTourist.htm">
			<area coords="202, 150, 202, 155, 202, 160, 202, 164, 199, 164, 194, 161, 189, 158, 187, 150, 182, 146, 179, 142, 175, 142, 173, 135, 173, 131, 167, 124, 170, 119, 172, 114, 175, 110, 182, 105, 189, 108, 194, 110, 197, 110, 206, 115, 209, 117, 216, 121, 216, 126, 220, 131, 220, 138, 222, 140, 222, 144, 218, 146, 214, 146, 210, 146, 206, 147" shape="polygon" href="HimachalPradesh/himachalpradeshTourist.htm">
			<area coords="139, 151, 140, 144, 142, 139, 142, 134, 144, 127, 148, 125, 154, 124, 157, 122, 160, 122, 164, 120, 167, 122, 168, 126, 170, 130, 173, 134, 174, 137, 175, 143, 180, 148, 183, 151, 185, 154, 185, 160, 181, 166, 177, 168, 170, 171, 166, 173, 158, 177, 155, 177, 152, 172, 150, 169, 147, 169, 144, 169, 138, 169, 134, 169, 132, 166, 129, 163, 131, 158" shape="polygon" href="Punjab/punjabTourist.htm">
			<area coords="239, 154, 246, 155, 253, 160, 257, 163, 262, 168, 255, 173, 254, 177, 251, 182, 251, 187, 248, 192, 243, 194, 243, 197, 237, 196, 232, 193, 225, 188, 224, 188, 224, 184, 221, 181, 220, 181, 218, 178, 213, 176, 210, 177, 203, 180, 203, 178, 203, 175, 205, 169, 207, 165, 206, 162, 205, 157, 207, 152, 207, 151, 211, 152, 218, 151, 226, 148, 228, 151, 231, 151, 235, 155" shape="polygon" href="Uttaranchal/uttaranchalTourist.htm">
			<area coords="165, 215, 165, 209, 165, 205, 162, 201, 159, 199, 156, 194, 159, 188, 166, 183, 159, 183, 153, 182, 147, 182, 143, 176, 142, 172, 147, 172, 149, 175, 157, 178, 164, 181, 169, 177, 174, 174, 179, 168, 183, 166, 185, 160, 189, 160, 193, 163, 196, 164, 191, 168, 191, 173, 188, 176, 188, 183, 189, 186, 191, 194, 191, 199, 192, 204, 192, 208, 192, 211, 189, 214, 184, 217, 184, 215, 184, 213, 183, 210, 182, 208, 181, 208, 178, 210, 175, 211, 172, 208, 169, 209, 169, 210" shape="polygon" href="Haryana/haryanaTourist.htm">
			<area coords="193, 234, 192, 229, 192, 226, 190, 223, 190, 218, 191, 216, 193, 212, 194, 208, 194, 202, 191, 198, 193, 194, 193, 192, 193, 187, 192, 180, 193, 176, 194, 172, 197, 169, 200, 175, 201, 179, 205, 181, 210, 180, 215, 181, 221, 186, 221, 191, 225, 191, 231, 192, 232, 196, 236, 197, 239, 199, 243, 200, 246, 202, 249, 203, 253, 206, 260, 209, 263, 213, 266, 214, 273, 220, 282, 223, 287, 226, 295, 232, 300, 230, 306, 230, 309, 231, 311, 233, 315, 237, 318, 239, 317, 248, 316, 252, 316, 258, 319, 258, 320, 260, 321, 263, 315, 263, 312, 264, 309, 267, 309, 269, 303, 271, 302, 276, 303, 280, 304, 284, 304, 287, 303, 289, 302, 294, 298, 295, 295, 295, 294, 291, 293, 287, 292, 284, 290, 280, 287, 279, 284, 283, 281, 279, 279, 275, 274, 273, 271, 272, 269, 269, 266, 271, 262, 273, 262, 278, 257, 278, 254, 273, 248, 275, 245, 275, 246, 264, 243, 265, 238, 269, 232, 270, 228, 270, 227, 269, 222, 266, 222, 263, 216, 265, 213, 270, 213, 274, 214, 277, 218, 286, 218, 290, 212, 290, 208, 290, 205, 285, 203, 281, 205, 273, 205, 267, 209, 265, 213, 261, 216, 255, 218, 249, 219, 244, 218, 239, 214, 238, 209, 238, 205, 238, 201, 233" shape="polygon" href="UttarPradesh/uttarpradeshTourist.htm">
			<area coords="313, 289, 309, 287, 308, 283, 306, 279, 304, 275, 306, 271, 310, 271, 314, 268, 321, 266, 326, 262, 326, 258, 323, 255, 320, 252, 321, 247, 322, 241, 319, 235, 314, 232, 311, 228, 315, 228, 322, 230, 327, 233, 330, 237, 333, 240, 342, 241, 346, 244, 352, 246, 359, 247, 366, 248, 373, 249, 379, 250, 384, 250, 388, 251, 386, 254, 386, 264, 387, 267, 384, 269, 380, 270, 377, 271, 373, 274, 373, 282, 368, 284, 364, 287, 360, 287, 356, 285, 351, 280, 348, 282, 345, 286, 341, 287, 338, 288, 334, 291, 329, 287, 327, 289, 325, 292, 322, 292, 319, 289, 317, 287, 314, 284" shape="polygon" href="Bihar/biharTourist.htm">
			<area coords="389, 252, 390, 248, 393, 243, 396, 239, 395, 235, 399, 234, 402, 234, 405, 234, 408, 236, 411, 237, 414, 238, 422, 242, 422, 245, 422, 247, 422, 253, 419, 253, 415, 249, 413, 246, 409, 245, 406, 248, 403, 245, 400, 244, 400, 249, 397, 254, 395, 256, 398, 258, 402, 261, 403, 263, 407, 265, 408, 271, 403, 273, 400, 275, 400, 280, 393, 283, 400, 287, 404, 288, 404, 294, 405, 304, 407, 306, 408, 316, 409, 320, 409, 329, 413, 335, 413, 340, 413, 345, 411, 347, 406, 345, 404, 345, 400, 346, 398, 346, 394, 346, 396, 338, 394, 332, 392, 332, 389, 336, 389, 341, 389, 342, 383, 342, 380, 339, 376, 337, 373, 331, 369, 328, 367, 326, 363, 323, 359, 319, 355, 316, 350, 311, 355, 307, 361, 306, 367, 303, 373, 300, 378, 298, 382, 290, 385, 287, 386, 280, 388, 277, 389, 273, 387, 269, 387, 266, 387, 264, 387, 263" shape="polygon" href="WestBengal/westbengalTourist.htm">
			<area coords="390, 230, 390, 225, 391, 222, 393, 220, 395, 218, 399, 213, 402, 214, 402, 219, 403, 221, 406, 229, 404, 231, 400, 233, 398, 233, 397, 233, 394, 232" shape="polygon" href="Sikkim/sikkimTourist.htm">
			<area coords="473, 277, 476, 277, 479, 275, 481, 269, 481, 265, 479, 261, 478, 258, 474, 257, 472, 256, 472, 254, 472, 250, 468, 250, 465, 250, 461, 250, 459, 252, 455, 254, 452, 255, 449, 255, 445, 253, 442, 253, 437, 254, 434, 254, 428, 255, 426, 259, 424, 261, 424, 257, 423, 254, 423, 251, 425, 248, 423, 245, 425, 243, 427, 240, 431, 239, 436, 239, 443, 238, 449, 236, 453, 236, 457, 235, 462, 235, 465, 234, 471, 234, 476, 233, 481, 232, 486, 231, 491, 229, 496, 227, 501, 223, 504, 219, 510, 217, 515, 213, 520, 209, 525, 209, 531, 208, 533, 210, 534, 214, 534, 217, 531, 218, 528, 222, 523, 224, 522, 227, 518, 228, 517, 233, 513, 237, 510, 238, 508, 241, 504, 246, 504, 250, 501, 252, 497, 254, 492, 256, 490, 259, 490, 265, 489, 268, 489, 273, 485, 277, 482, 278, 477, 280, 475, 283, 473, 284" shape="polygon" href="Assam/TouristspotsAssam.asp">
			<area href="map/Meghalaya/meghalayaTourist.htm" shape="polygon" coords="442, 273, 438, 273, 433, 273, 429, 270, 426, 267, 426, 264, 428, 259, 433, 257, 439, 257, 442, 256, 446, 256, 451, 256, 456, 256, 458, 254, 462, 253, 467, 253, 469, 255, 471, 258, 474, 260, 476, 264, 477, 269, 473, 272, 470, 272, 466, 272, 461, 273, 455, 273, 451, 273, 446, 273">
			<area href="map/Tripura/tripuraTourist.htm" shape="polygon" coords="466, 304, 464, 308, 464, 313, 463, 317, 461, 314, 458, 314, 455, 314, 454, 309, 452, 304, 452, 300, 452, 297, 456, 293, 458, 290, 460, 289, 464, 288, 466, 286, 469, 286, 471, 286, 474, 287, 475, 292, 475, 295, 473, 299, 470, 300">
			<area coords="474, 312, 475, 308, 474, 304, 473, 302, 476, 301, 477, 296, 477, 291, 477, 290, 477, 288, 480, 286, 481, 285, 482, 287, 482, 289, 486, 291, 489, 293, 492, 293, 492, 298, 492, 301, 493, 306, 493, 311, 493, 315, 491, 317, 491, 323, 492, 326, 492, 330, 490, 333, 487, 333, 483, 332, 481, 332" shape="polygon" href="Mizoram/mizoramTourist.htm">
			<area href="map/Manipur/manipurTourist.htm" shape="polygon" coords="511, 291, 505, 292, 499, 293, 497, 293, 491, 292, 488, 289, 485, 285, 486, 282, 488, 279, 491, 276, 492, 272, 492, 268, 495, 264, 499, 261, 502, 261, 509, 262, 512, 260, 515, 260, 515, 264, 515, 266, 518, 272, 516, 276, 514, 281, 514, 287">
			<area href="map/Nagaland/nagalandTourist.htm" shape="polygon" coords="522, 244, 522, 248, 522, 252, 522, 256, 519, 259, 513, 257, 509, 257, 507, 258, 503, 258, 499, 259, 496, 261, 493, 263, 492, 261, 494, 258, 498, 256, 502, 253, 504, 251, 507, 249, 508, 244, 510, 242, 513, 239, 516, 238, 517, 234, 518, 233, 520, 235, 521, 238">
			<area href="map/ArunachalPradesh/arunachalpradeshTourist.htm" shape="polygon" coords="454, 216, 461, 216, 469, 216, 472, 212, 478, 208, 483, 203, 486, 199, 492, 196, 498, 196, 498, 191, 500, 187, 508, 185, 512, 186, 518, 185, 523, 185, 524, 185, 531, 180, 538, 180, 538, 184, 542, 187, 544, 189, 545, 191, 543, 199, 551, 197, 562, 198, 563, 206, 558, 216, 559, 224, 550, 223, 544, 225, 536, 229, 531, 237, 527, 239, 525, 234, 524, 229, 526, 223, 532, 219, 535, 217, 536, 209, 535, 206, 530, 206, 523, 207, 516, 208, 511, 212, 507, 215, 502, 220, 495, 222, 490, 227, 482, 231, 475, 231, 468, 231, 467, 225, 464, 221, 457, 220, 458, 216, 464, 216, 469, 216, 471, 212, 476, 210, 479, 208">
			<area href="map/Jharkhand/jharkhandTourist.htm" shape="polygon" coords="301, 298, 305, 293, 308, 289, 312, 288, 316, 289, 318, 293, 324, 293, 330, 293, 336, 293, 340, 290, 346, 288, 349, 283, 353, 286, 358, 289, 363, 289, 370, 287, 375, 283, 375, 277, 378, 276, 382, 274, 384, 277, 384, 282, 383, 287, 377, 292, 372, 296, 363, 300, 358, 306, 352, 309, 348, 313, 351, 317, 354, 325, 360, 326, 367, 329, 363, 334, 359, 334, 354, 329, 352, 334, 351, 337, 346, 335, 339, 335, 333, 337, 333, 331, 334, 327, 329, 329, 321, 330, 317, 329, 317, 323, 317, 318, 316, 312, 312, 307, 310, 303, 306, 299">
			<area href="map/Chhattisgarh/chhattisgarhTourist.htm" shape="polygon" coords="247, 350, 251, 346, 251, 339, 255, 335, 260, 329, 267, 324, 273, 321, 276, 316, 278, 310, 277, 306, 273, 305, 272, 302, 272, 298, 277, 298, 281, 297, 286, 297, 291, 295, 296, 295, 300, 296, 303, 300, 307, 306, 312, 311, 315, 317, 317, 322, 316, 328, 314, 331, 311, 333, 307, 337, 305, 342, 304, 348, 302, 353, 294, 355, 288, 358, 283, 364, 282, 371, 283, 377, 286, 379, 288, 381, 285, 382, 281, 380, 277, 381, 274, 380, 275, 384, 277, 388, 276, 392, 278, 398, 278, 403, 276, 407, 272, 412, 266, 415, 262, 420, 261, 423, 258, 424, 254, 421, 253, 415, 250, 411, 243, 407, 239, 402, 243, 399, 244, 396, 246, 393, 249, 394, 253, 393, 254, 388, 249, 384, 245, 380, 244, 377, 247, 374, 247, 369, 247, 365, 247, 360, 245, 357, 245, 353" target="_blank">
			<area href="map/MadhyaPradesh/madhyapradeshTourist.htm" shape="polygon" coords="186, 349, 187, 345, 185, 340, 176, 341, 173, 344, 171, 348, 167, 351, 162, 352, 159, 348, 152, 346, 144, 344, 140, 341, 133, 339, 129, 335, 128, 331, 127, 327, 127, 324, 122, 321, 122, 320, 125, 317, 125, 313, 128, 307, 130, 305, 133, 303, 136, 299, 137, 295, 139, 290, 137, 286, 134, 283, 138, 278, 141, 276, 137, 273, 141, 273, 145, 273, 148, 276, 148, 281, 154, 279, 157, 281, 158, 287, 158, 292, 151, 294, 156, 297, 162, 295, 162, 290, 166, 290, 173, 290, 177, 290, 177, 285, 177, 279, 180, 278, 183, 276, 187, 271, 188, 267, 181, 267, 177, 267, 173, 266, 170, 261, 170, 258, 175, 254, 179, 252, 183, 249, 188, 245, 194, 245, 200, 243, 203, 239, 209, 239, 214, 241, 216, 245, 216, 251, 214, 254, 214, 257, 212, 261, 207, 266, 205, 273, 202, 278, 200, 283, 203, 290, 205, 292, 211, 294, 217, 292, 222, 291, 222, 287, 219, 282, 217, 277, 217, 274, 217, 269, 219, 268, 223, 269, 227, 273, 230, 274, 235, 273, 240, 270, 244, 270, 246, 273, 247, 276, 249, 277, 254, 280, 259, 280, 263, 280, 266, 277, 272, 279, 275, 280, 280, 283, 286, 285, 290, 290, 290, 295, 281, 295, 273, 296, 268, 298, 268, 301, 270, 305, 274, 312, 271, 317, 267, 321, 264, 324, 260, 327, 256, 331, 250, 337, 249, 346, 245, 349, 241, 347, 237, 347, 234, 347, 231, 346, 226, 343, 219, 343, 215, 345, 210, 345, 205, 346, 200, 346, 193, 347">
			<area href="map/Orissa/orissaTourist.htm" shape="polygon" coords="279, 419, 275, 420, 270, 422, 264, 423, 266, 418, 271, 415, 274, 412, 278, 408, 279, 403, 279, 397, 279, 391, 278, 386, 279, 385, 283, 385, 288, 385, 291, 380, 287, 377, 285, 373, 286, 367, 287, 362, 293, 361, 300, 358, 303, 356, 307, 352, 309, 346, 312, 341, 312, 336, 318, 335, 324, 333, 328, 332, 331, 336, 332, 339, 338, 340, 343, 339, 349, 339, 355, 339, 357, 336, 362, 336, 367, 336, 372, 338, 374, 340, 377, 342, 379, 346, 378, 348, 372, 350, 369, 356, 368, 361, 369, 368, 369, 373, 365, 375, 361, 380, 359, 383, 354, 386, 346, 387, 343, 385, 337, 385, 338, 390, 336, 394, 333, 395, 328, 395, 321, 398, 319, 401, 316, 405, 310, 405, 307, 399, 301, 400, 294, 402, 293, 408, 292, 411, 288, 413, 283, 411, 279, 410, 276, 413, 275, 417, 275, 420">
			<area href="map/Rajasthan/rajasthanTourist.htm" shape="polygon" coords="66, 274, 63, 266, 62, 260, 60, 254, 52, 250, 52, 245, 52, 240, 52, 234, 47, 231, 41, 226, 42, 222, 44, 216, 49, 212, 52, 208, 55, 205, 62, 205, 67, 206, 74, 206, 82, 205, 89, 202, 97, 194, 102, 188, 110, 183, 112, 176, 119, 168, 126, 165, 134, 167, 137, 169, 140, 173, 143, 180, 147, 184, 153, 185, 156, 189, 156, 199, 159, 204, 164, 212, 167, 218, 168, 213, 177, 216, 182, 218, 186, 222, 188, 225, 191, 233, 194, 238, 198, 240, 194, 243, 187, 244, 181, 247, 174, 250, 173, 255, 170, 257, 172, 264, 173, 266, 177, 268, 183, 269, 181, 271, 177, 274, 176, 281, 175, 283, 169, 285, 163, 288, 160, 290, 155, 296, 160, 284, 157, 278, 153, 275, 150, 268, 144, 270, 138, 272, 135, 280, 137, 288, 137, 296, 132, 301, 127, 308, 123, 303, 119, 300, 116, 296, 114, 290, 109, 286, 106, 283, 105, 280, 97, 280, 90, 273, 86, 271, 81, 271, 73, 272, 70, 275">
			<area href="map/Gujarat/gujaratTourist.htm" shape="polygon" coords="72, 276, 66, 277, 61, 279, 57, 275, 49, 277, 40, 277, 33, 277, 28, 277, 24, 282, 19, 283, 13, 286, 17, 287, 21, 286, 19, 292, 24, 297, 25, 302, 33, 307, 41, 309, 48, 309, 53, 306, 57, 305, 56, 309, 49, 311, 48, 315, 39, 319, 32, 318, 26, 317, 26, 324, 30, 331, 36, 335, 40, 343, 46, 349, 58, 352, 69, 351, 79, 351, 81, 340, 81, 331, 84, 322, 88, 323, 89, 328, 90, 334, 92, 337, 90, 347, 91, 354, 93, 360, 93, 365, 98, 363, 100, 365, 104, 369, 104, 362, 108, 361, 113, 361, 119, 358, 122, 352, 125, 345, 124, 343, 121, 340, 116, 338, 118, 335, 125, 335, 129, 332, 129, 329, 127, 325, 122, 321, 122, 314, 124, 311, 125, 308, 121, 306, 117, 301, 115, 296, 113, 292, 108, 287, 102, 281, 99, 277, 94, 273, 87, 271, 77, 271">
			<area href="map/Maharashtra/tourspots.asp" shape="polygon" coords="90, 368, 97, 369, 104, 369, 106, 365, 110, 361, 115, 361, 122, 361, 122, 354, 125, 349, 125, 346, 122, 342, 119, 339, 121, 336, 125, 336, 129, 337, 133, 340, 138, 340, 142, 343, 147, 346, 155, 349, 164, 352, 172, 351, 176, 348, 178, 342, 185, 343, 186, 347, 188, 350, 194, 350, 201, 350, 206, 350, 210, 349, 217, 349, 223, 347, 230, 346, 236, 349, 244, 349, 248, 354, 247, 364, 245, 370, 245, 377, 244, 383, 246, 387, 249, 391, 250, 394, 246, 396, 243, 398, 240, 402, 240, 405, 235, 406, 232, 402, 231, 397, 230, 392, 226, 389, 222, 389, 218, 389, 214, 386, 208, 381, 204, 381, 203, 386, 199, 388, 198, 393, 192, 393, 189, 398, 189, 403, 186, 407, 186, 411, 181, 411, 178, 409, 173, 411, 172, 417, 168, 421, 163, 423, 158, 426, 159, 429, 157, 429, 152, 430, 146, 431, 145, 430, 142, 435, 138, 439, 134, 439, 131, 438, 129, 439, 124, 443, 123, 445, 118, 446, 116, 451, 117, 456, 112, 458, 110, 461, 105, 459, 102, 455, 98, 450, 98, 443, 97, 436, 97, 428, 96, 423, 95, 419, 91, 413, 92, 407, 89, 402, 90, 394, 90, 386, 90, 381, 90, 373">
			<area coords="106, 475, 104, 471, 103, 464, 105, 463, 107, 462, 110, 463, 114, 463, 115, 466, 115, 471, 115, 475, 113, 478, 110, 480" shape="polygon" href="Goa/goaTourist.htm">
			<area href="map/Karnataka/karnatakaTourist.htm" shape="polygon" coords="131, 527, 126, 522, 126, 520, 122, 517, 122, 514, 122, 509, 122, 504, 119, 501, 119, 496, 118, 493, 118, 488, 114, 481, 113, 479, 117, 477, 117, 473, 117, 469, 118, 465, 118, 463, 118, 460, 120, 458, 121, 454, 121, 452, 121, 450, 126, 448, 127, 444, 134, 442, 140, 440, 146, 439, 146, 435, 153, 433, 161, 433, 161, 429, 168, 426, 171, 420, 175, 418, 178, 412, 184, 412, 184, 417, 182, 421, 182, 428, 183, 433, 182, 439, 180, 446, 176, 450, 180, 455, 180, 460, 176, 462, 169, 467, 168, 473, 169, 478, 165, 483, 165, 489, 166, 494, 169, 499, 172, 495, 179, 494, 179, 496, 176, 499, 172, 502, 172, 506, 177, 507, 182, 507, 184, 506, 189, 506, 191, 510, 194, 514, 199, 517, 196, 521, 194, 524, 190, 525, 184, 525, 180, 528, 179, 534, 178, 541, 178, 546, 175, 549, 169, 549, 163, 547, 159, 550, 154, 549, 150, 549, 149, 544, 146, 540, 143, 539, 139, 535, 136, 533">
			<area href="map/AndhraPradesh/andhrapradeshTourist.html" shape="polygon" coords="330, 396, 330, 402, 324, 403, 324, 407, 318, 410, 315, 416, 309, 419, 304, 422, 300, 426, 293, 430, 287, 435, 280, 440, 276, 445, 276, 450, 276, 455, 271, 455, 264, 456, 257, 457, 255, 461, 252, 465, 249, 470, 245, 466, 242, 465, 237, 467, 235, 472, 232, 476, 232, 481, 232, 484, 235, 488, 234, 496, 234, 501, 234, 507, 234, 512, 235, 516, 229, 516, 224, 518, 225, 522, 224, 523, 219, 523, 215, 523, 210, 523, 206, 523, 202, 525, 202, 528, 195, 529, 192, 525, 199, 525, 200, 521, 200, 518, 201, 513, 202, 511, 198, 507, 194, 507, 191, 504, 187, 503, 182, 505, 176, 505, 175, 501, 180, 499, 181, 496, 177, 494, 173, 493, 170, 489, 168, 485, 169, 482, 171, 477, 171, 473, 171, 470, 171, 466, 175, 465, 184, 464, 183, 459, 182, 454, 179, 451, 184, 449, 184, 443, 184, 440, 185, 436, 185, 430, 185, 423, 187, 420, 187, 417, 187, 414, 188, 410, 190, 407, 191, 404, 191, 400, 194, 397, 196, 396, 200, 394, 201, 390, 203, 387, 205, 385, 209, 385, 211, 388, 216, 391, 220, 392, 225, 393, 226, 395, 228, 399, 229, 403, 230, 408, 234, 410, 237, 410, 242, 410, 243, 412, 248, 414, 252, 417, 254, 420, 255, 424, 259, 425, 264, 425, 267, 425, 274, 424, 277, 422, 282, 421">
			<area href="map/Kerala/keralaTourist.htm" shape="polygon" coords="149, 555, 153, 556, 155, 561, 159, 563, 161, 568, 162, 576, 163, 581, 167, 580, 169, 586, 169, 592, 170, 595, 170, 600, 167, 605, 167, 609, 167, 615, 167, 621, 163, 622, 160, 619, 159, 614, 156, 609, 150, 600, 148, 595, 146, 588, 145, 582, 144, 576, 139, 570, 139, 564, 139, 558, 137, 552, 132, 545, 128, 538, 124, 530, 123, 526, 122, 522, 125, 522, 128, 526, 130, 529, 132, 531, 141, 537, 147, 542, 148, 545, 148, 550, 151, 558, 153, 556">
			<area href="map/TamilNadu/tamilnaduTourist.htm" shape="polygon" coords="175, 625, 170, 625, 169, 620, 169, 615, 169, 611, 171, 605, 173, 600, 174, 595, 169, 589, 171, 584, 171, 578, 167, 578, 166, 573, 166, 567, 164, 562, 161, 557, 157, 554, 152, 548, 159, 551, 164, 551, 171, 552, 177, 552, 184, 550, 184, 544, 181, 538, 181, 535, 182, 529, 187, 528, 192, 531, 196, 532, 202, 532, 206, 529, 210, 526, 220, 525, 227, 525, 228, 519, 235, 518, 235, 524, 235, 529, 235, 535, 231, 537, 229, 542, 228, 548, 226, 555, 226, 566, 227, 575, 227, 581, 225, 585, 221, 583, 215, 585, 211, 587, 209, 593, 207, 600, 207, 603, 202, 606, 198, 606, 192, 606, 189, 610, 189, 615, 186, 622, 180, 625">
			<area coords="147, 82, 4" shape="circle" href="JammuKashmir/cities/Srinagar/aboutsrinagar.htm">
			</map>
			<img border="0" src="map/india-map1.jpg" width="570" height="703" usemap="#FPMap0"></p>
				<!-- Map Coding Ends here -->
			
		</div>
	</center>
</div>

</body>
</html>