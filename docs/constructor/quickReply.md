# quickReply

**Description** : *A quick reply shortcut*

**Layer** : 211

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
	shortcut_id : 20,
	shortcut : 'hwln5GreB3biItAs',
	top_message : 80,
	count : 6,
);
```