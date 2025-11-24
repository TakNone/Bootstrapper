# emojiKeywordsDifference

**Description** : *Changes to emoji keywords*

**Layer** : 218

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
	lang_code : 'hKRWjszTASO84Zrl',
	from_version : 40,
	version : 64,
	keywords : array(
		$client->emojiKeyword(
			keyword : 'rDgN24vRCclaOFQ9',
			emoticons : array('Ldctjo12l8FIzMy7'),
		),
		$client->emojiKeywordDeleted(
			keyword : 'xrCe6fl9FLaSw7Zn',
			emoticons : array('HNEfUIdZ0VLXcvY1'),
		),
	),
);
```