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
	lang_code : 'ForlAbs0TBXYcDCP',
	from_version : 23,
	version : 81,
	keywords : array(
		$client->emojiKeyword(
			keyword : 'A34OlVgtCK8YbDWe',
			emoticons : array('iSrbV190PFKBd4tm'),
		),
		$client->emojiKeywordDeleted(
			keyword : 'vx3GLqJt50De21Zs',
			emoticons : array('On4FzrEtdZfA8kJX'),
		),
	),
);
```