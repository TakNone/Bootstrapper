# pageBlockChannel

**Description** : *Reference to a telegram channel*

**Layer** : 218

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
		id : -5752047460468633173,
	),
);
```