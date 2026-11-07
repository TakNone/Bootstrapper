# starGiftAuctionStateNotModified

**Description** : *Returned only by auction methods \(never by updates\) if the passed version is equal to the remote auction &raquo;\.version, meaning auction information hasn&#039;t changed over the locally cached version*

**Layer** : 233

```tl
starGiftAuctionStateNotModified#fe333952 = StarGiftAuctionState;
```

---

## Type

[StarGiftAuctionState](type/StarGiftAuctionState)

---

## Example

```php
$starGiftAuctionState = $client->starGiftAuctionStateNotModified();
```