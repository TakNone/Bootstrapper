# channelAdminLogEventActionExportedInviteDelete

**Description** : *A chat invite was deleted*

**Layer** : 218

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
		link : 'Y8PHSWmEo3gaUObn',
		admin_id : -6262140069777128193,
		date : 54,
		start_date : 61,
		expire_date : 68,
		usage_limit : 51,
		usage : 95,
		requested : 88,
		subscription_expired : 34,
		title : 'J4qQT5aOEL9glzVm',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 83,
			amount : -6878458838621706792,
		),
	),
);
```