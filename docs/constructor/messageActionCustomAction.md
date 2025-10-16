# messageActionCustomAction

**Description** : *Custom action \(most likely not supported by the current layer, an upgrade might be needed\)*

**Layer** : 216

```tl
messageActionCustomAction#fae69f56 message:string = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>message</mark> | [`string`](type/string) | Action message |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionCustomAction(
	message : 'Jc39xI2oLGiVeYOt',
);
```