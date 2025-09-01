# premium.myBoosts

**Description** : *A list of peers we are currently boosting, and how many boost slots we have left*

**Layer** : 214

```tl
premium.myBoosts#9ae228e2 my_boosts:Vector<MyBoost> chats:Vector<Chat> users:Vector<User> = premium.MyBoosts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>my_boosts</mark> | [`Vector<MyBoost>`](type/MyBoost) | Info about boosted peers and remaining boost slots |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Referenced chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Referenced users |

---

## Type

[premium.MyBoosts](type/premium.MyBoosts)

---

## Example

```php
$premiumMyBoosts = $client->premium->myBoosts(
	my_boosts : array(
		$client->myBoost(
			slot : 45,
			peer : $client->peerUser(
				user_id : 6352408887451967387,
			),
			date : 41,
			expires : 24,
			cooldown_until_date : 62,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -1834720979324224424,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6027753637036868994,
			title : 'iARtJMO12yHpBDIW',
			photo : $client->chatPhotoEmpty(),
			participants_count : 81,
			date : 77,
			version : 54,
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
				until_date : 17,
			),
		),
		$client->chatForbidden(
			id : 1144555712324164005,
			title : '6IuoPgF3C7RmsV0v',
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
			id : 4053675006032571629,
			access_hash : -6436371425349499569,
			title : 'oyIpHZ35sC7DhqFX',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 71,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'CJglb10GYLRh8i9E',
					reason : 'eSvXmMh1RKT7Q4EW',
					text : 'v7SzKHjMsQ9REZPl',
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
				until_date : 81,
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
				until_date : 63,
			),
			participants_count : 11,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 89,
			color : $client->peerColor(
				color : 78,
				background_emoji_id : 1515164988559796350,
			),
			profile_color : $client->peerColor(
				color : 26,
				background_emoji_id : 6735103626771481345,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 5,
			subscription_until_date : 42,
			bot_verification_icon : 2875992463491289160,
			send_paid_messages_stars : -4409276876882994166,
			linked_monoforum_id : -7544417225904503555,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -2560591027339613691,
			access_hash : -8036969951614451877,
			title : '2hYSRT735vurjG0L',
			until_date : 60,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2920265762962805474,
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
			id : 5471472079643827581,
			access_hash : -8800541844971218355,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 93,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'sYCef8DlMjkchRJ7',
					reason : 'DeIWYoSHK4GR8fp3',
					text : 'xdfLi5WNQYeO93To',
				),
			),
			bot_inline_placeholder : 'W3wclHgfqGpEJnoI',
			lang_code : 'EhynZgpGx5VuA1Tr',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 79,
			color : $client->peerColor(
				color : 95,
				background_emoji_id : 7449026216189078823,
			),
			profile_color : $client->peerColor(
				color : 47,
				background_emoji_id : -6032442906146940379,
			),
			bot_active_users : 14,
			bot_verification_icon : 8364377420781046897,
			send_paid_messages_stars : 6018662992801324176,
		),
	),
);
```