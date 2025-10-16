# messageActionChannelCreate

**Description** : *The channel was created*

**Layer** : 216

```tl
messageActionChannelCreate#95d2ac92 title:string = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>title</mark> | [`string`](type/string) | Original channel/supergroup title |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionChannelCreate(
	title : 'jEiu64e892qkYVAO',
);
```