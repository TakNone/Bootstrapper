# chatlists.chatlistInviteAlready

**Description** : *Updated info about a chat folder deep link &raquo; we already imported*

**Layer** : 216

```tl
chatlists.chatlistInviteAlready#fa87f659 filter_id:int missing_peers:Vector<Peer> already_peers:Vector<Peer> chats:Vector<Chat> users:Vector<User> = chatlists.ChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>filter_id</mark> | [`int`](type/int) | ID of the imported folder |
| <mark>missing_peers</mark> | [`Vector<Peer>`](type/Peer) | New peers to be imported |
| <mark>already_peers</mark> | [`Vector<Peer>`](type/Peer) | Peers that were already imported |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Related chat information |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related user information |

---

## Type

[chatlists.ChatlistInvite](type/chatlists.ChatlistInvite)

---

## Example

```php
$chatlistsChatlistInvite = $client->chatlists->chatlistInviteAlready(
	filter_id : 11,
	missing_peers : array(
		$client->peerUser(
			user_id : 8980533926708227479,
		),
		$client->peerChat(
			chat_id : -6080049427462148776,
		),
		$client->peerChannel(
			channel_id : 1819112625630932204,
		),
	),
	already_peers : array(
		$client->peerUser(
			user_id : -4256126811310252021,
		),
		$client->peerChat(
			chat_id : 4870220322415514611,
		),
		$client->peerChannel(
			channel_id : 7565885427217823784,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 3705356222768870627,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 7664117830352291240,
			title : 'HeVMNtQ27DA5zIxo',
			photo : $client->chatPhotoEmpty(),
			participants_count : 81,
			date : 100,
			version : 45,
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
				until_date : 83,
			),
		),
		$client->chatForbidden(
			id : -7816529264947503644,
			title : 'RwdPo24N0lBvhtFU',
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
			id : -556913546562744745,
			access_hash : 4420954350381524000,
			title : 'D1CLFs3ego75IVJm',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 73,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'UyLExw7sfNDgvdAF',
					reason : 'M6tel04ODTbEvSd7',
					text : 'EIZQWvCcU4mhJdbH',
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
				until_date : 33,
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
				until_date : 44,
			),
			participants_count : 63,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 51,
			color : $client->peerColor(
				color : 75,
				background_emoji_id : -4480950637148327887,
			),
			profile_color : $client->peerColor(
				color : 1,
				background_emoji_id : -6142800345430276096,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 8,
			subscription_until_date : 4,
			bot_verification_icon : 4016022242235306964,
			send_paid_messages_stars : -4136096772194881266,
			linked_monoforum_id : 4220814042644638522,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -6513199831507304383,
			access_hash : 3086966372308921487,
			title : 'pgQhVnoiX4IEJ3Z5',
			until_date : 100,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2090255928340069040,
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
			id : 3786782967074516752,
			access_hash : 5235007533731281427,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 70,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'xAj1QvTrCSIeJgKt',
					reason : 'Lqjvyd1WYVe0htx4',
					text : 'oQeW2q6KONZkL5Ct',
				),
			),
			bot_inline_placeholder : 'wtEBJ7QHPKvhjnzR',
			lang_code : 'qmcApzrslhKXwFxW',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 51,
			color : $client->peerColor(
				color : 73,
				background_emoji_id : 9041097672190597972,
			),
			profile_color : $client->peerColor(
				color : 67,
				background_emoji_id : 8998093635427174265,
			),
			bot_active_users : 80,
			bot_verification_icon : 1908699284003744379,
			send_paid_messages_stars : -7883569766686848548,
		),
	),
);
```