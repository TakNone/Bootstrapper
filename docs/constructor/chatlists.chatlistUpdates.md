# chatlists.chatlistUpdates

**Description** : *Updated information about a chat folder deep link &raquo;*

**Layer** : 218

```tl
chatlists.chatlistUpdates#93bd878d missing_peers:Vector<Peer> chats:Vector<Chat> users:Vector<User> = chatlists.ChatlistUpdates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>missing_peers</mark> | [`Vector<Peer>`](type/Peer) | New peers to join |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Related chat information |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related user information |

---

## Type

[chatlists.ChatlistUpdates](type/chatlists.ChatlistUpdates)

---

## Example

```php
$chatlistsChatlistUpdates = $client->chatlists->chatlistUpdates(
	missing_peers : array(
		$client->peerUser(
			user_id : -4337986308910277410,
		),
		$client->peerChat(
			chat_id : 6560270626761836482,
		),
		$client->peerChannel(
			channel_id : 4646091157145571888,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 356973985130053513,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -616531469111183797,
			title : 'HFfk6OTLNzmI8ltp',
			photo : $client->chatPhotoEmpty(),
			participants_count : 96,
			date : 49,
			version : 91,
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
				until_date : 59,
			),
		),
		$client->chatForbidden(
			id : -1492627141958330335,
			title : 'FtDSzpsj8u9ZNPif',
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
			id : 6379574226409536961,
			access_hash : 8507051733043429581,
			title : 'CHTPatVFUmZNe45x',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 25,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '9hnsVvq5SFTXrjeP',
					reason : 'zOd3xpw1eRQDiLhs',
					text : 'kxl9TdW742sUVNfX',
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
				until_date : 77,
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
				until_date : 3,
			),
			participants_count : 100,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 14,
			),
			color : $client->peerColor(
				color : 29,
				background_emoji_id : -3072498547503794745,
			),
			profile_color : $client->peerColor(
				color : 66,
				background_emoji_id : 6344293904567884577,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 84,
			subscription_until_date : 61,
			bot_verification_icon : -5809787075057844556,
			send_paid_messages_stars : 350138487421448043,
			linked_monoforum_id : 7095865595580040901,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 8024321237470276431,
			access_hash : -798043741887251095,
			title : 'IFMPjnRWgLCtJ6lU',
			until_date : 93,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2805116570989753410,
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
			id : -8037837070244144202,
			access_hash : -4477681192709404307,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 12,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Z2AfkghXwbctqIdJ',
					reason : 'xqdOjLYyUuhH5pQm',
					text : 'WrQbdqNFEXh3nusO',
				),
			),
			bot_inline_placeholder : 'ThOt1Wf8sgao0u3K',
			lang_code : 'VxwHS2kLTBzPCAc1',
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
				max_id : 93,
			),
			color : $client->peerColor(
				color : 17,
				background_emoji_id : -3776027428151231729,
			),
			profile_color : $client->peerColor(
				color : 59,
				background_emoji_id : 7530522531556248949,
			),
			bot_active_users : 2,
			bot_verification_icon : -906853662156117953,
			send_paid_messages_stars : 7750085626786023833,
		),
	),
);
```