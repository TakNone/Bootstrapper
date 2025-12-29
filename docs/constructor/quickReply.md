# quickReply

**Description** : *A quick reply shortcut*

**Layer** : 218

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
	shortcut_id : 26,
	shortcut : '3Xwop65x8LnseaY2',
	top_message : 20,
	count : 48,
);
```