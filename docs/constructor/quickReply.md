# quickReply

**Description** : *A quick reply shortcut*

**Layer** : 222

```tl
quickReply#697102b shortcut_id:int shortcut:string top_message:int count:int = QuickReply;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>shortcut_id</mark> | [`int`](type/int) | Unique shortcut ID |
| <mark>shortcut</mark> | [`string`](type/string) | Shortcut name |
| <mark>top_message</mark> | [`int`](type/int) | ID of the last message in the shortcut |
| <mark>count</mark> | [`int`](type/int) | Total number of messages in the shortcut |

---

## Type

[QuickReply](type/QuickReply)

---

## Example

```php
$quickReply = $client->quickReply(
	shortcut_id : 69,
	shortcut : 'mEgbKC8l1cZtXGUS',
	top_message : 66,
	count : 90,
);
```