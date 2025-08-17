# invokeWithoutUpdates

**Description** : *Invoke a request without subscribing the used connection for updates (this is enabled by default for file queries)*

**Layer** : 211

```tl
invokeWithoutUpdates#bf9459b7 {X:Type} query:!X = X;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>query</mark> | [`!X`](type/X) | The query |

---

## Result

[X](type/X)

---

## Example

```php
$x = $client->invokeWithoutUpdates(
	query : $client->X(),
);
```