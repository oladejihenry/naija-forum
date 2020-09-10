<p>1. Please post all threads in the right section, and don't derail threads by posting off topic.</p>
<p>2. Don't abuse, bully, deliberately insult/provoke, fight, or wish harm to Naijaswift members OR THEIR TRIBES.</p>
<p>3. Don't threaten, support or DEFEND violent acts against any person, tribe, race, animals, or group (e.g. rape).</p>
<p>4. Do not drop personal information on this forum, you do so at your own risk.</p>
<p>5. Do not post Nudes or Pornographic videos, user that does otherwise would be banned.</p>
<p>6. Don't attempt to post censored words by misspelling them.</p>
<p>7. Don't promote shady investments like betting, HYIP, MLM, FOREX, binary options, and cryptocurrencies on Naijaswift.</p>
<p>8. Don't spam the forum by advertising in the wrong places or posting the same content many times.</p>
<p>9. Don't say, do, or THREATEN to do anything that's detrimental to the security, success, or reputation of Naijaswift.</p>
<p>10. Don't post false information on Naijaswift.</p>
<p>11. Don't use Naijaswift for illegal acts, e.g scams, plagiarism, hacking, gay meetings, incitement, promoting secession.</p>
<p>12. Don't violate the privacy of any people e.g. by posting their private pics, info, or chats without permission</p>
<br>
<div class="main-form">
    <div style="text-align:left;">
        <b style="font-size:14px; ">
            Title:
        </b>
        <input type="text" name="subject" value="{{old('subject')}}" style="width:100%">
    </div>
    <div style="text-align:left;">
        <input type="hidden" name="categories" value="{{$category->id}}">
    </div>
    <br><br>
    <div style="text-align:left;">
        <b style="font-size:14px; ">
            Write Your Article Here:
        </b>
        <b style="color:red; font-size: 14px;">(Please do not post adverts in this section, to avoid being banned.)</b>
    </div>
    <textarea name="body" id="editor" style="height:300px;width:100%;">{{old('body')}}</textarea>
    <script>
        var textarea = document.getElementById('editor');

        sceditor.create(textarea, {
            emoticons:{
            dropdown: {
                ':)': '../emoticons/smile.png',
                ':angel:': '../emoticons/angel.png',
                ':alien:': '../emoticons/alien.png',
                ':blink:': '../emoticons/blink.png',
                ':angry': '../emoticons/angry.png',
                ':D': '../emoticons/grin.png',
                ':P': '../emoticons/tongue.png',
                ':blush:': '../emoticons/blush.png',
                ':(': '../emoticons/cwy.png',
                '<3': '../emoticons/heart.png'
            }
        },
            format: 'xhtml',
            icons: 'monocons',
            style: '../minified/themes/content/default.min.css'
        });
    </script>
    <br>
    <div class="form-group">
        <label for="image"><b>Select Image To Add:</b> (Maximum Size: <b>5MB</b>)</label>
        <input type="file" name="image">
        <input type="file" name="image_2">
        <input type="file" name="image_3">
    </div>
    <br>
    <div class="post-submit" style="text-align: left;">
        <button type="submit">Publish Post</button>
    </div>

</div>