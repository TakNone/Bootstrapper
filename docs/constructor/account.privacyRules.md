# account.privacyRules

**Description** : *Privacy rules*

**Layer** : 211

```tl
account.privacyRules#50a04e45 rules:Vector<PrivacyRule> chats:Vector<Chat> users:Vector<User> = account.PrivacyRules;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>rules</mark> | [`Vector<PrivacyRule>`](type/PrivacyRule) | Privacy rules |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats to which the rules apply |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users to which the rules apply |

---

## Type

[account.PrivacyRules](type/account.PrivacyRules)

---

## Example

```php
$accountPrivacyRules = $client->account->privacyRules(
	rules : array(
		$client->privacyValueAllowContacts(),
		$client->privacyValueAllowAll(),
		$client->privacyValueAllowUsers(
			users : array(-3606422289230965205),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(2721627612549705093),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(6908132428631638135),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(9132112293455900119),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
	chats : array(
		$client->chatEmpty(
			id : 7054392384279523691,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -9077896856299616190,
			title : 'ux2FPlc43EpHXomi',
			photo : $client->chatPhotoEmpty(),
			participants_count : 49,
			date : 21,
			version : 25,
			migrated_to : $client->inputChannelEmpty(),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 49,
			),
		),
		$client->chatForbidden(
			id : -7186226480985565001,
			title : '5jarHsOEcP7l2DWK',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : -1216728416540700054,
			access_hash : -837388079203701316,
			title : '40tpmwd3E8KyWgFz',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 41,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'lINbrmUjky5EJXo4',
					reason : '3d0zk4Y2On9uXais',
					text : 'Ydl1B7nIg0ErqU3i',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 15,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 65,
			),
			participants_count : 7,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 37,
			color : $client->peerColor(
				color : 52,
				background_emoji_id : 4131387076734226365,
			),
			profile_color : $client->peerColor(
				color : 62,
				background_emoji_id : 6233528738111828252,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 89,
			subscription_until_date : 3,
			bot_verification_icon : 6329780708863201034,
			send_paid_messages_stars : -205197371128579462,
			linked_monoforum_id : 1541194375496632301,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 4746518735281122592,
			access_hash : 8733488914018183105,
			title : 'v8mOUGiAwRyj207C',
			until_date : 54,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6476052509710474646,
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
			id : 6653394655320511454,
			access_hash : 2834356832443740572,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 51,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'OFPD0kTlV63a2i4e',
					reason : 'E6l5KC40zNWPdbfc',
					text : 'RXgycZLwd3UOeYVD',
				),
			),
			bot_inline_placeholder : 'QBzi3gnFZOpEHxjq',
			lang_code : 'n6XDcWHBdNKlFmi8',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 9,
			color : $client->peerColor(
				color : 32,
				background_emoji_id : 6687076869328980207,
			),
			profile_color : $client->peerColor(
				color : 37,
				background_emoji_id : -2225699053621815064,
			),
			bot_active_users : 97,
			bot_verification_icon : 2381569934182619315,
			send_paid_messages_stars : 9107333815547943525,
		),
	),
);
```