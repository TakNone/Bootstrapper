# emojiKeyword

**Description** : *Emoji keyword*

**Layer** : 211

```tl
emojiKeyword#d5b3b9f9 keyword:string emoticons:Vector<string> = EmojiKeyword;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>keyword</mark> | [`string`](type/string) | Keyword |
| <mark>emoticons</mark> | [`Vector<string>`](type/string) | Emojis associated to keyword |

---

## Type

[EmojiKeyword](type/EmojiKeyword)

---

## Example

```php
$emojiKeyword = $client->emojiKeyword(
	keyword : 'vh6mZt54qbCWersF',
	emoticons : array('b6WpuAC1kTEORBoy'),
);
```