# messages.getEmojiKeywords

**Description** : *Get localized emoji keywords &raquo;*

**Layer** : 218

```tl
messages.getEmojiKeywords#35a0e062 lang_code:string = EmojiKeywordsDifference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>lang_code</mark> | [`string`](type/string) | Language code |

---

## Result

[EmojiKeywordsDifference](type/EmojiKeywordsDifference)

---

## Example

```php
$emojiKeywordsDifference = $client->messages->getEmojiKeywords(
	lang_code : 'LiHa2dsAMGISTc1x',
);
```