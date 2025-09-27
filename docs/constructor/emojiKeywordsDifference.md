# emojiKeywordsDifference

**Description** : *Changes to emoji keywords*

**Layer** : 214

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
	lang_code : 'pq1rbf96s7Hx3Vco',
	from_version : 45,
	version : 4,
	keywords : array(
		$client->emojiKeyword(
			keyword : 'mJNZpCrgcLTq2Ftk',
			emoticons : array('E9QOALiry0xGUqzw'),
		),
		$client->emojiKeywordDeleted(
			keyword : 'OnFZkBV4NXRCc8r3',
			emoticons : array('CJQTDPUoqX93Lw6O'),
		),
	),
);
```