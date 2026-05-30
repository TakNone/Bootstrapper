# emojiKeywordsDifference

**Description** : *Changes to emoji keywords*

**Layer** : 225

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
	lang_code : 'AhxPrH54tdcT1wIi',
	from_version : 76,
	version : 83,
	keywords : array(
		$client->emojiKeyword(
			keyword : 'zYA8FKpwb3dOSLGJ',
			emoticons : array('mYIi7w5WosMXl4uT'),
		),
		$client->emojiKeywordDeleted(
			keyword : 'FixKdL3RXUcu1oze',
			emoticons : array('3nLtmOQ2xeXiYRbT'),
		),
	),
);
```