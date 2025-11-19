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
		link : 'ZLhWUXKzu6NaSrQj',
		admin_id : -223485515136815714,
		date : 78,
		start_date : 71,
		expire_date : 1,
		usage_limit : 41,
		usage : 74,
		requested : 73,
		subscription_expired : 0,
		title : 'z6ZL4GbSt3Hrhcnw',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 33,
			amount : -6627040895002141315,
		),
	),
);
```