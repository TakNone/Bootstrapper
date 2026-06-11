# channelAdminLogEventActionExportedInviteRevoke

**Description** : *A specific invite link was revoked*

**Layer** : 227

```tl
channelAdminLogEventActionExportedInviteRevoke#410a134e invite:ExportedChatInvite = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | The invite link that was revoked |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionExportedInviteRevoke(
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '98hntTvQcP6MqKZa',
		admin_id : 3779016643885513903,
		date : 36,
		start_date : 34,
		expire_date : 3,
		usage_limit : 68,
		usage : 64,
		requested : 66,
		subscription_expired : 56,
		title : 'sELYzoGa76Cv5PIF',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 34,
			amount : -6418814838489144850,
		),
	),
);
```