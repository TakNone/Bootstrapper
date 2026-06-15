# emojiKeyword

**Description** : *Emoji keyword*

**Layer** : 227

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
	keyword : 'Vh2rdmif7Hp3Foel',
	emoticons : array('fHCn8MmAY7cpj5ql'),
);
```