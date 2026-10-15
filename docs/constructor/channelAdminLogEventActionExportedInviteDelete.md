# channelAdminLogEventActionExportedInviteDelete

**Description** : *A chat invite was deleted*

**Layer** : 229

```tl
channelAdminLogEventActionExportedInviteDelete#5a50fca4 invite:ExportedChatInvite = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | The deleted chat invite |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionExportedInviteDelete(
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'MV79Z8q2QprPChdK',
		admin_id : -1516784700944021491,
		date : 18,
		start_date : 37,
		expire_date : 96,
		usage_limit : 80,
		usage : 56,
		requested : 47,
		subscription_expired : 54,
		title : 'KNZjuaGy21AzbIeh',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 62,
			amount : -3971053220879930008,
		),
	),
);
```