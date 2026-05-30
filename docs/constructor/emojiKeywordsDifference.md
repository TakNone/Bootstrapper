# emojiKeywordsDifference

**Description** : *Changes to emoji keywords*

**Layer** : 222

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
	lang_code : 'bnYcCFgmt2kZHUiL',
	from_version : 19,
	version : 75,
	keywords : array(
		$client->emojiKeyword(
			keyword : 'qmdZix8PMEWcgr2A',
			emoticons : array('Lby7tQBShZMKG1Ii'),
		),
		$client->emojiKeywordDeleted(
			keyword : 'EWkDT9hn7M42VuPY',
			emoticons : array('flSDAcCph8Tn6Ltk'),
		),
	),
);
```