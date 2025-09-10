# messageActionChannelMigrateFrom

**Description** : *Indicates the channel was migrated from the specified chat*

**Layer** : 214

```tl
messageActionChannelMigrateFrom#ea3948e9 title:string chat_id:long = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>title</mark> | [`string`](type/string) | The old chat title |
| <mark>chat_id</mark> | [`long`](type/long) | The old chat ID |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionChannelMigrateFrom(
	title : '70nyKsGd1Xe5jW8T',
	chat_id : -5437261411652677623,
);
```