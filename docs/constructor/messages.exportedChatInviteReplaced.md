# messages.exportedChatInviteReplaced

**Description** : *The specified chat invite was replaced with another one*

**Layer** : 227

```tl
messages.exportedChatInviteReplaced#222600ef invite:ExportedChatInvite new_invite:ExportedChatInvite users:Vector<User> = messages.ExportedChatInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | The replaced chat invite |
| <mark>new_invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | The invite that replaces the previous invite |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[messages.ExportedChatInvite](type/messages.ExportedChatInvite)

---

## Example

```php
$messagesExportedChatInvite = $client->messages->exportedChatInviteReplaced(
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'n8ZMda4FbfpGOiKT',
		admin_id : -2689850031648755211,
		date : 46,
		start_date : 2,
		expire_date : 25,
		usage_limit : 54,
		usage : 44,
		requested : 71,
		subscription_expired : 2,
		title : 'sRuTXk9ZY0dqH2pE',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 61,
			amount : -1868316708862719538,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'tDPgCzJqh1w58nO3',
		admin_id : 4336595528337338638,
		date : 97,
		start_date : 40,
		expire_date : 71,
		usage_limit : 67,
		usage : 39,
		requested : 1,
		subscription_expired : 50,
		title : 'qirgpk4Kt9BjH7uQ',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 4,
			amount : -1119134737743371567,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3679011016854562556,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : 1896267736770872590,
			access_hash : 8955681694045857268,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 18,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'n1Qc9pGu8g3zI7FV',
					reason : 'cbLaXlMUVGviw2EQ',
					text : 'ePtVSHCdDoKIfXGZ',
				),
			),
			bot_inline_placeholder : 't8i0dcsPhEbwNQCA',
			lang_code : '9RT07qO64FgNeE2Q',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 45,
			),
			color : $client->peerColor(
				color : 32,
				background_emoji_id : -75767415776073795,
			),
			profile_color : $client->peerColor(
				color : 31,
				background_emoji_id : -7950092810531849613,
			),
			bot_active_users : 1,
			bot_verification_icon : 6733790385364635260,
			send_paid_messages_stars : 7943152648945918395,
		),
	),
);
```