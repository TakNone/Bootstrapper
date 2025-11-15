# payments.upgradeStarGift

**Description** : *Upgrade a gift to a collectible gift: can only be used if the upgrade was already paid by the gift sender; see here &raquo; for more info on the full flow \(including the different flow to use in case the upgrade was not paid by the gift sender\)*

**Layer** : 216

```tl
payments.upgradeStarGift#aed6e4f5 flags:# keep_original_details:flags.0?true stargift:InputSavedStarGift = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **keep_original_details** | [`flags.0?true`](type/true) | Set this flag to keep the original gift text, sender and receiver in the upgraded gift as a starGiftAttributeOriginalDetails attribute |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | The gift to upgrade |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BUSINESS_CONNECTION_INVALID** | `400` | The connection_id passed to the wrapping invokeWithBusinessConnection call is invalid |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **PAYMENT_REQUIRED** | `400` | Payment is required for this action, see here » for more info |
| **SAVED_ID_EMPTY** | `400` | The passed inputSavedStarGiftChat.saved_id is empty |
| **STARGIFT_ALREADY_CONVERTED** | `400` | The specified star gift was already converted to Stars |
| **STARGIFT_ALREADY_UPGRADED** | `400` | The specified gift was already upgraded to a collectible gift |
| **STARGIFT_UPGRADE_UNAVAILABLE** | `400` | A received gift can only be upgraded to a collectible gift if the messageActionStarGift/savedStarGift.can_upgrade flag is set |

---

## Example

```php
$updates = $client->payments->upgradeStarGift(
	keep_original_details : true,
	stargift : $client->inputSavedStarGiftUser(
		msg_id : 54,
	),
);
```