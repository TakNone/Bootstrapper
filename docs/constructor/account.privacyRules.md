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
			users : array(-7234945804208374414),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(868057874606691463),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(-8474324083342898759),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(7162128043259397665),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
	chats : array(
		$client->chatEmpty(
			id : 4821476188221316847,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2774242631313847198,
			title : 'IzitR7KJd0NfjHEe',
			photo : $client->chatPhotoEmpty(),
			participants_count : 27,
			date : 81,
			version : 7,
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
				until_date : 80,
			),
		),
		$client->chatForbidden(
			id : -5319294235530748840,
			title : 'Wa9zQwdKlyijEUbC',
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
			id : 254330961974408327,
			access_hash : 5458160763647836560,
			title : 'aU0q8N3mpy54uOjD',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 84,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '13hbsEfa8xcvUN5Z',
					reason : 'f82KIeS7c0EpYl9G',
					text : '5DQM20BxayHAC9RJ',
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
				until_date : 71,
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
				until_date : 71,
			),
			participants_count : 36,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 70,
			color : $client->peerColor(
				color : 62,
				background_emoji_id : -4850365145646717377,
			),
			profile_color : $client->peerColor(
				color : 30,
				background_emoji_id : 3444350418095992248,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 32,
			subscription_until_date : 30,
			bot_verification_icon : -925252316234201455,
			send_paid_messages_stars : 1959908594724588406,
			linked_monoforum_id : -1605947453293669217,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6674826713982056197,
			access_hash : -7851961310675849158,
			title : 'MgZrXRLpQVtK9knN',
			until_date : 64,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1543755651052578244,
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
			id : -6168368696192301194,
			access_hash : -4691427421999126046,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 39,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Abv6XcdL3DMFmyqs',
					reason : 'AqikZSsyCuXbWBfD',
					text : 'bUaMQPeiInKqtVgC',
				),
			),
			bot_inline_placeholder : 'LMI697TjhFJeqOP4',
			lang_code : '8SmHCYOefxNcPvbT',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 19,
			color : $client->peerColor(
				color : 33,
				background_emoji_id : -3272500969330421260,
			),
			profile_color : $client->peerColor(
				color : 35,
				background_emoji_id : 1426609702674829312,
			),
			bot_active_users : 81,
			bot_verification_icon : 7290238226752706787,
			send_paid_messages_stars : -7834882991651468092,
		),
	),
);
```