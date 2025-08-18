# premium.myBoosts

**Description** : *A list of peers we are currently boosting, and how many boost slots we have left*

**Layer** : 211

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
			slot : 70,
			peer : $client->peerUser(
				user_id : -94851023690330317,
			),
			date : 23,
			expires : 23,
			cooldown_until_date : 19,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6789831946524485760,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -1276297228649019682,
			title : 'ZOWXMlm3n82uf0IV',
			photo : $client->chatPhotoEmpty(),
			participants_count : 13,
			date : 59,
			version : 9,
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
				until_date : 7,
			),
		),
		$client->chatForbidden(
			id : -2722312786494337699,
			title : 'GYZFh2lezCtTcJq1',
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
			id : -5547377044697287847,
			access_hash : -7416353449965517559,
			title : 'qF4gRusHh3wmidl5',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 1,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'n2GFTdoDtJmsUj8w',
					reason : 'VYhQdP6LuF8UiRSr',
					text : 'HXQpoMwRnG4fyWbC',
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
				until_date : 22,
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
				until_date : 9,
			),
			participants_count : 91,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 84,
			color : $client->peerColor(
				color : 38,
				background_emoji_id : 66738419884972397,
			),
			profile_color : $client->peerColor(
				color : 71,
				background_emoji_id : -2138937499872936166,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 47,
			subscription_until_date : 47,
			bot_verification_icon : 1035076401021795212,
			send_paid_messages_stars : -7757696997462102951,
			linked_monoforum_id : 7909720983566089886,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 2491134494308504551,
			access_hash : 160475579602157366,
			title : 'rTuqMnHteLBSGhiW',
			until_date : 26,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4294232275994148954,
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
			id : -4516963781663393382,
			access_hash : -4176939516113146616,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 16,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wAk0u9NHb3SxzZ8G',
					reason : 'fbQNzpgc3Ei7tYX9',
					text : 'iMYF7DLTQHX5P1A2',
				),
			),
			bot_inline_placeholder : '8mUW7ys2orET1gwG',
			lang_code : 'YkuT6DLrF0emGMHw',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 28,
			color : $client->peerColor(
				color : 25,
				background_emoji_id : 5531490756811860934,
			),
			profile_color : $client->peerColor(
				color : 58,
				background_emoji_id : 3504077506821562923,
			),
			bot_active_users : 89,
			bot_verification_icon : 3103643213956236946,
			send_paid_messages_stars : -684856324568912965,
		),
	),
);
```