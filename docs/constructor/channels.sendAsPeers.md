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
				user_id : -5683436071504366505,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6549712129690369397,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -3831199786210720369,
			title : 'bckmGNyqx0XlUY86',
			photo : $client->chatPhotoEmpty(),
			participants_count : 42,
			date : 45,
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
				until_date : 13,
			),
		),
		$client->chatForbidden(
			id : -1651792925515294632,
			title : 'hHLDyZzewQmSPFkN',
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
			id : 7268372869181095743,
			access_hash : -3656765189906926737,
			title : 'lxE1JgpG2VmhwUrF',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 34,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'CMHiUpbeuoPntVwA',
					reason : 'XW7zO19tuwEIC2oP',
					text : 'lXbt9dgJpq8yoNfi',
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
				until_date : 84,
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
				until_date : 27,
			),
			participants_count : 84,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 34,
			color : $client->peerColor(
				color : 50,
				background_emoji_id : -7383432492064233556,
			),
			profile_color : $client->peerColor(
				color : 82,
				background_emoji_id : -3170270972582029299,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 92,
			subscription_until_date : 18,
			bot_verification_icon : -5611278190573716027,
			send_paid_messages_stars : -3229659623278172126,
			linked_monoforum_id : 7245331749697121694,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 842389470386344522,
			access_hash : 6123717445160401139,
			title : 'G9s0AUFMpBDXOTYg',
			until_date : 80,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8209380602907647639,
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
			id : -1109688677370366840,
			access_hash : -9210999959028526176,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 58,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '7xqVzmOd9ba5lGHr',
					reason : 'dphE8Doz3K9gjY2v',
					text : 'p1IBYgqcZ3ob9Cht',
				),
			),
			bot_inline_placeholder : 'o8SW0sFi7NqAevDu',
			lang_code : 'plqVOLicUNFwoGT0',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 95,
			color : $client->peerColor(
				color : 47,
				background_emoji_id : -9025472270835149330,
			),
			profile_color : $client->peerColor(
				color : 46,
				background_emoji_id : 7909051787248614384,
			),
			bot_active_users : 42,
			bot_verification_icon : 3772504091309254093,
			send_paid_messages_stars : -5681890846794231222,
		),
	),
);
```