# emojiKeywordsDifference

**Description** : *Changes to emoji keywords*

**Layer** : 211

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
	lang_code : 'nhI3qN2w4rPusxbi',
	from_version : 21,
	version : 21,
	keywords : array(
		$client->emojiKeyword(
			keyword : 'IvMTba8kGDNBLKoC',
			emoticons : array('c2rEN8vawf6BIYi9'),
		),
		$client->emojiKeywordDeleted(
			keyword : 'ZDWxUTIyO7FRPGYV',
			emoticons : array('BOpHKq10wQelNZXM'),
		),
	),
);
```