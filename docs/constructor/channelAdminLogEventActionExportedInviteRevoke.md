# channelAdminLogEventActionExportedInviteRevoke

**Description** : *A specific invite link was revoked*

**Layer** : 214

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
		link : 'a68hQDOIlNG2niV3',
		admin_id : 1436866932478017978,
		date : 67,
		start_date : 9,
		expire_date : 38,
		usage_limit : 19,
		usage : 26,
		requested : 15,
		subscription_expired : 32,
		title : 'nNb0pkTXB1l9dzvO',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 55,
			amount : 6416040270819515096,
		),
	),
);
```