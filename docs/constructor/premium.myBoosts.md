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
			slot : 43,
			peer : $client->peerUser(
				user_id : -3717718234711521582,
			),
			date : 72,
			expires : 58,
			cooldown_until_date : 4,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -3109744741662569334,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4971540026017712694,
			title : 's4JaMwjCH0kq3yrd',
			photo : $client->chatPhotoEmpty(),
			participants_count : 84,
			date : 7,
			version : 31,
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
				until_date : 36,
			),
		),
		$client->chatForbidden(
			id : -2333969630205215853,
			title : 'CbZDncwXuNs31PO2',
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
			id : 6243069052051884755,
			access_hash : -5789185186501979678,
			title : 'm58wrya9iAkBjEFe',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 64,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'onp3qZedgFcOLj27',
					reason : 'ZfoDFbySO8cNqPvp',
					text : 'vkc8SynsU3PLOzNm',
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
				until_date : 0,
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
				until_date : 29,
			),
			participants_count : 88,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 27,
			color : $client->peerColor(
				color : 68,
				background_emoji_id : 6734256343874249117,
			),
			profile_color : $client->peerColor(
				color : 65,
				background_emoji_id : 3481400974376915610,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 3,
			subscription_until_date : 1,
			bot_verification_icon : -1559567996435095565,
			send_paid_messages_stars : 1140185827211776438,
			linked_monoforum_id : 6166977622890939091,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 4197863934554011072,
			access_hash : 517031846621597525,
			title : 'jcVYlfb2OS7ULnt0',
			until_date : 39,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2583468623406083413,
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
			id : -4887472541717660980,
			access_hash : 1429821972374779527,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 85,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'vVEXiz1FxsUtfnmQ',
					reason : 'HCo6MRu0QL94bedg',
					text : 'FCdOzqg0N4LKUBix',
				),
			),
			bot_inline_placeholder : 'e0Hptc396rPKVWsx',
			lang_code : 'XK3L9k2iyhtBSQvR',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 17,
			color : $client->peerColor(
				color : 88,
				background_emoji_id : 2506417159443279201,
			),
			profile_color : $client->peerColor(
				color : 94,
				background_emoji_id : -5142157904252674978,
			),
			bot_active_users : 2,
			bot_verification_icon : 8732208873618228617,
			send_paid_messages_stars : 7893400560436197921,
		),
	),
);
```