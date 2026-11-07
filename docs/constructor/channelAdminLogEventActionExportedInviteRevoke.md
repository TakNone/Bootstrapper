# channelAdminLogEventActionExportedInviteRevoke

**Description** : *A specific invite link was revoked*

**Layer** : 233

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
		link : 'QtuPNhf2pXYazKLq',
		admin_id : 1873243155376891088,
		date : 61,
		start_date : 98,
		expire_date : 99,
		usage_limit : 82,
		usage : 25,
		requested : 10,
		subscription_expired : 43,
		title : 'XQURAD6YWPKeuqmv',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 33,
			amount : 913348651847651741,
		),
	),
);
```