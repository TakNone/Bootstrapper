# emojiKeywordsDifference

**Description** : *Changes to emoji keywords*

**Layer** : 216

```tl
emojiKeywordsDifference#5cc761bd lang_code:string from_version:int version:int keywords:Vector<EmojiKeyword> = EmojiKeywordsDifference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>lang_code</mark> | [`string`](type/string) | Language code for keywords |
| <mark>from_version</mark> | [`int`](type/int) | Previous emoji keyword list version |
| <mark>version</mark> | [`int`](type/int) | Current version of emoji keyword list |
| <mark>keywords</mark> | [`Vector<EmojiKeyword>`](type/EmojiKeyword) | Emojis associated to keywords |

---

## Type

[EmojiKeywordsDifference](type/EmojiKeywordsDifference)

---

## Example

```php
$emojiKeywordsDifference = $client->emojiKeywordsDifference(
	lang_code : 'N7yCRqskzrnJ3Beo',
	from_version : 100,
	version : 52,
	keywords : array(
		$client->emojiKeyword(
			keyword : 'cL7a5duDSUwFJZ4Q',
			emoticons : array('uAXITbcQhprPEDWt'),
		),
		$client->emojiKeywordDeleted(
			keyword : 'x5RLMwmhy9OoUs0b',
			emoticons : array('GxHtLKrkqhugvN74'),
		),
	),
);
```