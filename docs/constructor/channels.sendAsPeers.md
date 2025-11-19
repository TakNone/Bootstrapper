# channels.sendAsPeers

**Description** : *A list of peers that can be used to send messages in a specific group*

**Layer** : 218

```tl
channels.sendAsPeers#f496b0c6 peers:Vector<SendAsPeer> chats:Vector<Chat> users:Vector<User> = channels.SendAsPeers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peers</mark> | [`Vector<SendAsPeer>`](type/SendAsPeer) | Peers that can be used to send messages to the group |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[channels.SendAsPeers](type/channels.SendAsPeers)

---

## Example

```php
$channelsSendAsPeers = $client->channels->sendAsPeers(
	peers : array(
		$client->sendAsPeer(
			premium_required : true,
			peer : $client->peerUser(
				user_id : -949367728770671985,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8584492918605167637,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5477379913339680549,
			title : 'bBXrNPR17YIQG2pD',
			photo : $client->chatPhotoEmpty(),
			participants_count : 96,
			date : 37,
			version : 1,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
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
				until_date : 37,
			),
		),
		$client->chatForbidden(
			id : -8977495602478881891,
			title : '5mDUYkwipoFZnhyL',
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
			id : -7255511781233226838,
			access_hash : -2427369131884411047,
			title : 'vSz06nBuojYU7Pyc',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 2,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '56wBMdCEkm0tFnSV',
					reason : 'DIwfhapKPMtWZNSO',
					text : 'NV2YUH8qvc1a4Odb',
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
				until_date : 33,
			),
			participants_count : 24,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 74,
			),
			color : $client->peerColor(
				color : 100,
				background_emoji_id : 6472223131519074631,
			),
			profile_color : $client->peerColor(
				color : 31,
				background_emoji_id : -6780667257512721045,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 82,
			subscription_until_date : 82,
			bot_verification_icon : -5127723841543357942,
			send_paid_messages_stars : 8076136541375008974,
			linked_monoforum_id : -8865803416421781998,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -6079523554947127400,
			access_hash : -548048926451806396,
			title : 'F6hQKvwyXidzNPbm',
			until_date : 18,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8793909531198126971,
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
			id : 2868763000499762601,
			access_hash : -1643236125464498963,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 31,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'KC79xv0pqXew6Bzr',
					reason : 'fmSR1WTHJ9MFwZNU',
					text : '5vPaJxuqEWIGDFkO',
				),
			),
			bot_inline_placeholder : 'XU7KJBsdz9V6wZbx',
			lang_code : 'NlxAcRb92wfGXP4e',
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
				color : 98,
				background_emoji_id : -2307831137835302138,
			),
			profile_color : $client->peerColor(
				color : 60,
				background_emoji_id : -8756483045196140317,
			),
			bot_active_users : 61,
			bot_verification_icon : -2396606638408586478,
			send_paid_messages_stars : -5985968033084609036,
		),
	),
);
```