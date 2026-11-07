# wallet.userAddresses

**Layer** : 233

```tl
wallet.userAddresses#928e7b55 addresses:Vector<WalletUserAddress> users:Vector<User> = wallet.UserAddresses;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>addresses</mark> | [`Vector<WalletUserAddress>`](type/WalletUserAddress) | NOTHING |
| <mark>users</mark> | [`Vector<User>`](type/User) | NOTHING |

---

## Type

[wallet.UserAddresses](type/wallet.UserAddresses)

---

## Example

```php
$walletUserAddresses = $client->wallet->userAddresses(
	addresses : array(
		$client->walletUserAddress(
			user_id : 4179761481533952834,
			address : 'EdJoRb6lKL2SvDrI',
			public_key : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	users : array(
		$client->userEmpty(
			id : -4283956085181710498,
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
			bot_forum_sidebar : true,
			id : -4681713814890070269,
			access_hash : 3797656997948246091,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 78,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'MlEXHqFp6UcvrYu1',
					reason : 'Ku2JgEr97TaGiZDh',
					text : 'L0aj59lsPQCJAvyH',
				),
			),
			bot_inline_placeholder : 'njfOo4t8l6RT3evu',
			lang_code : 'IgLo08wYzWR2XHan',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 79,
			),
			color : $client->peerColor(
				color : 43,
				background_emoji_id : 1964642318096260422,
			),
			profile_color : $client->peerColor(
				color : 40,
				background_emoji_id : -2973607541491216620,
			),
			bot_active_users : 3,
			bot_verification_icon : -174030489426267111,
			send_paid_messages_stars : -847180964570157916,
			linked_community_id : -5752444918151725547,
		),
	),
);
```