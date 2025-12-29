# account.privacyRules

**Description** : *Privacy rules*

**Layer** : 218

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
			users : array(-664264750760163488),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(-3310413456122094558),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(-374395756166697088),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(-6576823443913842402),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
	chats : array(
		$client->chatEmpty(
			id : -3938123787955594637,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -709578883061709440,
			title : '54KVRlkfinxaAFc9',
			photo : $client->chatPhotoEmpty(),
			participants_count : 9,
			date : 38,
			version : 88,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				until_date : 86,
			),
		),
		$client->chatForbidden(
			id : -6910146593056032582,
			title : 'belmF5JwhV7Lgrsq',
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
			id : 2125092667796184103,
			access_hash : 8976897365148144542,
			title : 'Qy4M5xs7vcAFZLwu',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 96,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'iHC2yYMLXIAemtqS',
					reason : 'MxTO9bsRcG1wPCL7',
					text : 'lRJmHqwhMLUx4Agn',
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
				until_date : 82,
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
				until_date : 34,
			),
			participants_count : 31,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 72,
			),
			color : $client->peerColor(
				color : 28,
				background_emoji_id : 2418985134849919140,
			),
			profile_color : $client->peerColor(
				color : 96,
				background_emoji_id : -439487388742102537,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 27,
			subscription_until_date : 8,
			bot_verification_icon : 7895136718699237612,
			send_paid_messages_stars : -1632300817499012607,
			linked_monoforum_id : -4147624749577575593,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -4433896107434111088,
			access_hash : -6591009853283161617,
			title : '6YVASQfO0npBwbWc',
			until_date : 28,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3606906178775341309,
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
			id : -5625435156533830951,
			access_hash : -2561038172461835729,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 14,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2nkfKYZ5496MO8Sb',
					reason : 'WYl1vhJgX5zPiVGm',
					text : 'B4qNtsWoIMxCmfa6',
				),
			),
			bot_inline_placeholder : 'FcmL1HK3PMTJ7jsA',
			lang_code : 'a4NAoFt3Pu5K1qby',
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
				color : 91,
				background_emoji_id : 5986813939569681513,
			),
			profile_color : $client->peerColor(
				color : 31,
				background_emoji_id : -7293770811852310151,
			),
			bot_active_users : 0,
			bot_verification_icon : 7952065820626453948,
			send_paid_messages_stars : -3987780399185909015,
		),
	),
);
```