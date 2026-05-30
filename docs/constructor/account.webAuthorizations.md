# account.webAuthorizations

**Description** : *Web authorizations*

**Layer** : 225

```tl
account.webAuthorizations#ed56c9fc authorizations:Vector<WebAuthorization> users:Vector<User> = account.WebAuthorizations;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>authorizations</mark> | [`Vector<WebAuthorization>`](type/WebAuthorization) | Web authorization list |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[account.WebAuthorizations](type/account.WebAuthorizations)

---

## Example

```php
$accountWebAuthorizations = $client->account->webAuthorizations(
	authorizations : array(
		$client->webAuthorization(
			hash : 0,
			bot_id : 5678299484782348661,
			domain : 'GehTdZv1N3u6fr2b',
			browser : 'X4bwJsFhEitPjeKL',
			platform : 'MuyjcIUoH6XwpNse',
			date_created : 24,
			date_active : 33,
			ip : '127.0.0.1',
			region : 'DlRWGt1pjdywsL0I',
		),
	),
	users : array(
		$client->userEmpty(
			id : 7101190224947032897,
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
			id : -2752581253406968000,
			access_hash : -4438985979070719514,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 90,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'NcpQ2anCzKlhUZL6',
					reason : 'k4AEqZ6LfojgN2di',
					text : 'jImX0A7VPzLSJoNR',
				),
			),
			bot_inline_placeholder : 'QhbxUP4uNVmCcLOn',
			lang_code : 'UtmAu3wjLV4P9XSR',
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
				max_id : 34,
			),
			color : $client->peerColor(
				color : 24,
				background_emoji_id : 6299693532306109976,
			),
			profile_color : $client->peerColor(
				color : 17,
				background_emoji_id : -7260271037252797535,
			),
			bot_active_users : 42,
			bot_verification_icon : 5202653598308911085,
			send_paid_messages_stars : 5837872239511478065,
		),
	),
);
```