# emojiKeywordsDifference

**Description** : *Changes to emoji keywords*

**Layer** : 227

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
	lang_code : 'RquyLMmoprl3jAF9',
	from_version : 27,
	version : 51,
	keywords : array(
		$client->emojiKeyword(
			keyword : 'ZisXvSn0fE8CP5qm',
			emoticons : array('P51EzGxQIno0y7p9'),
		),
		$client->emojiKeywordDeleted(
			keyword : 's6VRJNQlXYKu80dT',
			emoticons : array('jgqEFtXeKHS69zQo'),
		),
	),
);
```