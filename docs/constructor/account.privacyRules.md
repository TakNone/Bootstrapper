# account.privacyRules

**Description** : *Privacy rules*

**Layer** : 222

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
			users : array(-3636918095006645489),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(4961998939943074473),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(2642254066242603195),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(7993274215454663147),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
	chats : array(
		$client->chatEmpty(
			id : -819869368991597379,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4398329155462153142,
			title : 'zZLRh7Xe15pTBPJQ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 78,
			date : 66,
			version : 48,
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
				until_date : 8,
			),
		),
		$client->chatForbidden(
			id : 7597521382757793798,
			title : '8x2SQgaTkoZXjB0s',
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
			id : 744506589086834405,
			access_hash : -764917872372115384,
			title : '9zBdI6JCMocGA8Nn',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 1,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '526rUbQHLMshYo9I',
					reason : 'XmbwTJ5tCki24Vsa',
					text : 'wDHUhjyA3iexGct4',
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
				until_date : 74,
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
				until_date : 43,
			),
			participants_count : 33,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 66,
			),
			color : $client->peerColor(
				color : 60,
				background_emoji_id : 7400130364429114432,
			),
			profile_color : $client->peerColor(
				color : 89,
				background_emoji_id : 1477458714122925266,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 91,
			subscription_until_date : 53,
			bot_verification_icon : -2810044013258998887,
			send_paid_messages_stars : 4418509294951730797,
			linked_monoforum_id : 1124631841331651489,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -7230561273604875623,
			access_hash : 9211606462894732736,
			title : 'jzhgEv18mOqAtY64',
			until_date : 18,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1569077436962666790,
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
			id : -6363732031621229627,
			access_hash : 3519356608242116030,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 95,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ajb0C8hKR7u92L6H',
					reason : 'ET1d2mKBW6kIUMNf',
					text : 'jLznZhDiEA536tGI',
				),
			),
			bot_inline_placeholder : '4OA6ugcX5bvSwdil',
			lang_code : '3y7upeTbawnsAxG4',
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
				max_id : 39,
			),
			color : $client->peerColor(
				color : 37,
				background_emoji_id : 1432168143078087209,
			),
			profile_color : $client->peerColor(
				color : 65,
				background_emoji_id : -2287002239198844314,
			),
			bot_active_users : 80,
			bot_verification_icon : 7642271107159229428,
			send_paid_messages_stars : 1296069719824881352,
		),
	),
);
```