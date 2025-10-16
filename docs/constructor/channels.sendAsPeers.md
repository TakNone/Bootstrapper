# channels.sendAsPeers

**Description** : *A list of peers that can be used to send messages in a specific group*

**Layer** : 216

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
				user_id : 6286664460581188520,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -3506189385183274485,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6715054217105227619,
			title : 'Dfmlk3gGYcNUAKpO',
			photo : $client->chatPhotoEmpty(),
			participants_count : 58,
			date : 17,
			version : 51,
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
				until_date : 30,
			),
		),
		$client->chatForbidden(
			id : -5281532254743996053,
			title : 'pg6BlIyOTHmzQX4i',
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
			id : -2981925894146522219,
			access_hash : -5664145686352140039,
			title : 'pWjtHPBdAM8k7E2R',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 35,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tWk46ax1XFTiOf27',
					reason : '1VYA5IlcaCXxDBez',
					text : 'uklTqAHXBF4p7wYn',
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
				until_date : 100,
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
				until_date : 87,
			),
			participants_count : 75,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 72,
			color : $client->peerColor(
				color : 48,
				background_emoji_id : -1871039205704924336,
			),
			profile_color : $client->peerColor(
				color : 94,
				background_emoji_id : 1520161615776436140,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 46,
			subscription_until_date : 33,
			bot_verification_icon : 8320296536645756988,
			send_paid_messages_stars : 3222875891158163991,
			linked_monoforum_id : 7676659550122032028,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 7580374538883235634,
			access_hash : -8238033434727181732,
			title : 'mCptTDElxuKkM38j',
			until_date : 94,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2507329560453999767,
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
			id : 4110665666125268648,
			access_hash : 8819453470180224469,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 49,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3ph8rak97l0ASLJV',
					reason : '10aXkA6iGUro7deW',
					text : 'iozG9IV5YDPEp4Js',
				),
			),
			bot_inline_placeholder : '57ieKjTI6WFOkCSa',
			lang_code : 'OxrKENk9MQAFC3uf',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 10,
			color : $client->peerColor(
				color : 74,
				background_emoji_id : 1322991721344464568,
			),
			profile_color : $client->peerColor(
				color : 67,
				background_emoji_id : 8549409833915410583,
			),
			bot_active_users : 71,
			bot_verification_icon : -8846416437207934909,
			send_paid_messages_stars : 5520638907080110048,
		),
	),
);
```