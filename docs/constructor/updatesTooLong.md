# updatesTooLong

**Description** : *The number of queued updates in the common message box is too large to be delivered passively through the socket, invoke updates\.getDifference to fetch the difference as specified in the documentation &raquo;*

**Layer** : 233

```tl
updatesTooLong#e317af7e = Updates;
```

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updatesTooLong();
```