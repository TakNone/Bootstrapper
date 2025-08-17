# VideoSize

**Description** : *Represents an animated video thumbnail*

**Layer** : 211

```tl
videoSize#de33b094 flags:# type:string w:int h:int size:int video_start_ts:flags.0?double = VideoSize;
videoSizeEmojiMarkup#f85c413c emoji_id:long background_colors:Vector<int> = VideoSize;
videoSizeStickerMarkup#da082fe stickerset:InputStickerSet sticker_id:long background_colors:Vector<int> = VideoSize;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**videoSize**](constructor/videoSize) | An animated profile picture in MPEG4 format |
| [**videoSizeEmojiMarkup**](constructor/videoSizeEmojiMarkup) | An animated profile picture based on a custom emoji sticker |
| [**videoSizeStickerMarkup**](constructor/videoSizeStickerMarkup) | An animated profile picture based on a sticker |