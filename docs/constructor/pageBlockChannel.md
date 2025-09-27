# pageBlockChannel

**Description** : *Reference to a telegram channel*

**Layer** : 216

```tl
pageBlockChannel#ef1751b5 channel:Chat = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`Chat`](type/Chat) | The channel/supergroup/chat |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockChannel(
	channel : $client->chatEmpty(
		id : -8214312938347714221,
	),
);
```