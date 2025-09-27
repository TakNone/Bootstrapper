# updates.channelDifference

**Description** : *The new updates*

**Layer** : 214

```tl
updates.channelDifference#2064674e flags:# final:flags.0?true pts:int timeout:flags.1?int new_messages:Vector<Message> other_updates:Vector<Update> chats:Vector<Chat> users:Vector<User> = updates.ChannelDifference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **final** | [`flags.0?true`](type/true) | Whether there are more updates to be fetched using getDifference, starting from the provided pts |
| <mark>pts</mark> | [`int`](type/int) | The PTS from which to start getting updates the next time |
| **timeout** | [`flags.1?int`](type/int) | Clients are supposed to refetch the channel difference after timeout seconds have elapsed, if the user is currently viewing the chat, see here » for more info |
| <mark>new_messages</mark> | [`Vector<Message>`](type/Message) | New messages |
| <mark>other_updates</mark> | [`Vector<Update>`](type/Update) | Other updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[updates.ChannelDifference](type/updates.ChannelDifference)

---

## Example

```php
$updatesChannelDifference = $client->updates->channelDifference(
	final : true,
	pts : 85,
	timeout : 26,
	new_messages : array(
		$client->messageEmpty(
			id : 99,
			peer_id : $client->peerUser(
				user_id : -2010442990837024507,
			),
		),
		$client->message(
			out : true,
			mentioned : true,
			media_unread : true,
			silent : true,
			post : true,
			from_scheduled : true,
			legacy : true,
			edit_hide : true,
			pinned : true,
			noforwards : true,
			invert_media : true,
			offline : true,
			video_processing_pending : true,
			paid_suggested_post_stars : true,
			paid_suggested_post_ton : true,
			id : 49,
			from_id : $client->peerUser(
				user_id : 4448813900895984326,
			),
			from_boosts_applied : 50,
			peer_id : $client->peerUser(
				user_id : -7058220510299364708,
			),
			saved_peer_id : $client->peerUser(
				user_id : -3015040160171547111,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : 'WiSymjxhP3anBrNt',
				date : 86,
				channel_post : 0,
				post_author : 'QGP3LdaoqAxbsDmX',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 100,
				saved_from_id : $client->peerUser(...),
				saved_from_name : 'dQADom2L8JE51g0u',
				saved_date : 17,
				psa_type : 'W2o1EhsLe5JCgUMX',
			),
			via_bot_id : 2899557509483004249,
			via_business_bot_id : 956329105895415424,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 42,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 25,
				quote_text : 'HnBrP5YJIiWsMeAg',
				quote_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				quote_offset : 21,
				todo_item_id : 51,
			),
			date : 58,
			message : 'GJEKQxWXwDh0Nt57',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 87,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 49,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 64,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 4,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 80,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 68,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 43,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 47,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 88,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 48,
					language : 'qfosIhw7vFmn6ERY',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 17,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 63,
					user_id : -6395468941974273897,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 35,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 74,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 1,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 41,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 40,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 37,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 68,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 6,
					document_id : 3197672796345642548,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 61,
				),
			),
			views : 4,
			forwards : 53,
			replies : $client->messageReplies(
				comments : true,
				replies : 69,
				replies_pts : 42,
				recent_repliers : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				channel_id : 4808375698837973173,
				max_id : 28,
				read_max_id : 24,
			),
			edit_date : 37,
			post_author : 'vU8PBAbjxdW4qOX0',
			grouped_id : -3298518116294293315,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mAan9jhoMRKpsq7t',
					reason : 'l4mvNf8O6cyEJ5z9',
					text : 'qr1ogvsQcGjKF62i',
				),
			),
			ttl_period : 55,
			quick_reply_shortcut_id : 58,
			effect : -6621839767641435064,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'yV3WTgOmzk4LBCQi',
				text : $client->textWithEntities(...),
				hash : 0,
			),
			report_delivery_until_date : 30,
			paid_message_stars : -94400991947082779,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(...),
				schedule_date : 62,
			),
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 7,
			from_id : $client->peerUser(
				user_id : -7859807539329738028,
			),
			peer_id : $client->peerUser(
				user_id : 7908036029946782515,
			),
			saved_peer_id : $client->peerUser(
				user_id : -2795733350202408537,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 29,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 33,
				quote_text : 'GFcUXIK5dAuNjeDn',
				quote_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				quote_offset : 27,
				todo_item_id : 73,
			),
			date : 78,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
			ttl_period : 82,
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 97,
				peer_id : $client->peerUser(...),
			),
			pts : 8,
			pts_count : 45,
		),
		$client->updateMessageID(
			id : 4,
			random_id : -66275336999632588,
		),
		$client->updateDeleteMessages(
			messages : array(59),
			pts : 12,
			pts_count : 16,
		),
		$client->updateUserTyping(
			user_id : 60550934978758523,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 4943071603581955301,
			from_id : $client->peerUser(
				user_id : 4362433265502375092,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -8925876391670659388,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : 6828079055713696681,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -3019286316981422114,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : 0,
			date : 2,
			device : '8BmyVzsAvPMY0gaZ',
			location : 'MAVRJxLuBXKNWH0g',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 5012806366158414351,
				chat_id : 19,
				date : 89,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(...),
			),
			qts : 96,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 90,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 20,
			),
			date : 57,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 50,
			max_date : 15,
			date : 43,
		),
		$client->updateChatParticipantAdd(
			chat_id : 1718154865024447650,
			user_id : -2794722185731711999,
			inviter_id : 2941803746119468542,
			date : 92,
			version : 65,
		),
		$client->updateChatParticipantDelete(
			chat_id : 5588012523555956798,
			user_id : 3851338307104455652,
			version : 63,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 74,
					ip_address : '127.0.0.1',
					port : 43,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 31,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : true,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 13,
			type : 'X386cmyrKAUSodw5',
			message : '3DElB1V5yqrTivSU',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 99,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 89,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 90,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 58,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 34,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 88,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 68,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 22,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 3,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 99,
					language : 'TFi7Cw0hcDazMWsj',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 36,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 86,
					user_id : -3972254376837182950,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 58,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 67,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 90,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 19,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 17,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 49,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 97,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 12,
					document_id : 6001714440414571386,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 70,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-8915393432155219584),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(572989493576062669),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(7002515776524902395),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-5722959055901815706),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 1964644750073416111,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 3,
			peer : $client->peerUser(
				user_id : -7351652200155377564,
			),
			max_id : 22,
			still_unread_count : 65,
			pts : 97,
			pts_count : 85,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 5360478148506292329,
			),
			max_id : 80,
			pts : 100,
			pts_count : 42,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 7503283792480715458,
				url : 'https://docs.liveproto.dev',
			),
			pts : 98,
			pts_count : 48,
		),
		$client->updateReadMessagesContents(
			messages : array(49),
			pts : 80,
			pts_count : 63,
			date : 83,
		),
		$client->updateChannelTooLong(
			channel_id : 7299404228342907048,
			pts : 90,
		),
		$client->updateChannel(
			channel_id : -5752237667209070628,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 38,
				peer_id : $client->peerUser(...),
			),
			pts : 18,
			pts_count : 60,
		),
		$client->updateReadChannelInbox(
			folder_id : 68,
			channel_id : -2710990799568150666,
			max_id : 61,
			still_unread_count : 43,
			pts : 57,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 1793512963940804082,
			messages : array(25),
			pts : 76,
			pts_count : 49,
		),
		$client->updateChannelMessageViews(
			channel_id : 7154768424291664035,
			id : 20,
			views : 6,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -8293349944425691286,
			user_id : -1377501695300639665,
			is_admin : false,
			version : 46,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(...),
				packs : array(
					$client->stickerPack(...),
				),
				keywords : array(
					$client->stickerKeyword(...),
				),
				documents : array(
					$client->documentEmpty(...),
					$client->document(...),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(5182754198429804008),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 116943232395985998,
			user_id : -6659309419174256355,
			query : 'pPB5EANtarinVYFK',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'bopHftX8NFxweJkn',
		),
		$client->updateBotInlineSend(
			user_id : 8109827907371409793,
			query : 'OCP3lcgSrvVALwWh',
			geo : $client->geoPointEmpty(),
			id : 'FdQc5ZpeqaslorIj',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 57,
				id : -7061837156186330650,
				access_hash : -7601923117100847244,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 67,
				peer_id : $client->peerUser(...),
			),
			pts : 18,
			pts_count : 72,
		),
		$client->updateBotCallbackQuery(
			query_id : 3450753031604433140,
			user_id : 3037539469161611173,
			peer : $client->peerUser(
				user_id : -6446695271899938574,
			),
			msg_id : 68,
			chat_instance : 4143130492453928426,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'ROKjahtBuGWPSoN8',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 51,
				peer_id : $client->peerUser(...),
			),
			pts : 6,
			pts_count : 52,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -4044885448808526123,
			user_id : -8991559118753269046,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 58,
				id : 806844935230975121,
				access_hash : 6696790413406428434,
			),
			chat_instance : -8179595737966956382,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'jGdelgxL8b49mFOo',
		),
		$client->updateReadChannelOutbox(
			channel_id : 3436590195750374559,
			max_id : 100,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 4779212704025379569,
			),
			top_msg_id : 42,
			saved_peer_id : $client->peerUser(
				user_id : -8325980054457137941,
			),
			draft : $client->draftMessageEmpty(
				date : 54,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -3687023231041511069,
			webpage : $client->webPageEmpty(
				id : 2186935545401230319,
				url : 'https://docs.liveproto.dev',
			),
			pts : 10,
			pts_count : 91,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 78,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 37,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 24,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'xl3U85LQpZNMjFC1',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -532352487300865591,
			data : $client->dataJSON(
				data : 'f7Tx4hJKPLIykpum',
			),
			timeout : 82,
		),
		$client->updateBotShippingQuery(
			query_id : 6375956143013192457,
			user_id : 5463067552596464203,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'gjPmsVu1h6nUIHZO',
				street_line2 : 'j9FRbG3oYgaHZ6B0',
				city : 'tYlP1dIzbfveKGm0',
				state : 'yB07mUI9vfQRM61D',
				country_iso2 : 'X28z3qket4NP9J0h',
				post_code : 'wCIkJGdyMchvA7UV',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 5326633028786744953,
			user_id : 893424434249045849,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'R20Ut9MckSgYqxC7',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'arEqb4SAkm5OwHUe',
			currency : '3JLIYfC9H6oPj7ca',
			total_amount : -3404526924524436929,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -1417253748951540826,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'soY2VJKc84IHtmGa',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'Dkf8juWqJF3RBSVv',
				from_version : 25,
				version : 74,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -6224253600469903025,
			top_msg_id : 72,
			saved_peer_id : $client->peerUser(
				user_id : 8896160691376929697,
			),
			messages : array(14),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -3021751409618571674,
			available_min_id : 16,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : 5282227078439531834,
			),
		),
		$client->updateMessagePoll(
			poll_id : 3697850127516427356,
			poll : $client->poll(
				id : -5730157269802286247,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 65,
				close_date : 38,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 46,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : '1fkweTOLqonyCbmX',
				solution_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 6322583126931272369,
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
				until_date : 73,
			),
			version : 83,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 79,
				),
			),
			pts : 79,
			pts_count : 28,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -839609425058618451,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 28,
				request_chat_title : 'hVoinuYAaWwbFp9N',
				request_chat_date : 33,
				business_bot_id : 5839937978853934906,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -5010595012108126975,
				registration_month : 'nmMDe2wlN4P0xidH',
				phone_country : '+1234567890',
				name_change_date : 27,
				photo_change_date : 31,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 34,
					distance : 44,
				),
				$client->peerSelfLocated(
					expires : 42,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 34,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -3397997017858897363,
			),
			messages : array(18),
			sent_messages : array(61),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -6386420236448990105,
				access_hash : -3029047932133587335,
				slug : 'OZjM2hGJAYpVH7rB',
				title : 'CM9pbTsJrhnd4kVE',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'xWGmJq3NuiHSMwPd',
				installs_count : 75,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 9076747933500012652,
			),
			msg_id : 33,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -3764834697517020581,
			peer : $client->peerUser(
				user_id : 251578886249006566,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 2,
		),
		$client->updateDialogFilter(
			id : 83,
			filter : $client->dialogFilter(
				contacts : true,
				non_contacts : true,
				groups : true,
				broadcasts : true,
				bots : true,
				exclude_muted : true,
				exclude_read : true,
				exclude_archived : true,
				title_noanimate : true,
				id : 87,
				title : $client->textWithEntities(...),
				emoticon : 'lUSoM9wHcs3WrpKa',
				color : 44,
				pinned_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				include_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				exclude_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(34),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -1818566129292659415,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 3377433856320658889,
			id : 5,
			forwards : 37,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 6096984167223784012,
			top_msg_id : 74,
			read_max_id : 24,
			broadcast_id : -7471757920224524401,
			broadcast_post : 31,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 6783001953568141764,
			top_msg_id : 94,
			read_max_id : 35,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 401195823718524154,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 3161046225214537708,
			top_msg_id : 87,
			from_id : $client->peerUser(
				user_id : -4070100852276872014,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -7575235553358361543,
			),
			messages : array(78),
			pts : 42,
			pts_count : 4,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -24667762044098362,
			messages : array(30),
			pts : 14,
			pts_count : 29,
		),
		$client->updateChat(
			chat_id : -6563907354811277357,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 7772873030443303498,
				access_hash : 1634044754585512854,
			),
			participants : array(
				$client->groupCallParticipant(
					muted : true,
					left : true,
					can_self_unmute : true,
					just_joined : true,
					versioned : true,
					min : true,
					muted_by_you : true,
					volume_by_admin : true,
					self : true,
					video_joined : true,
					peer : $client->peerUser(...),
					date : 11,
					active_date : 61,
					source : 0,
					volume : 47,
					about : 'U7VrN5ojfknIQywl',
					raise_hand_rating : 117539605879545681,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 66,
		),
		$client->updateGroupCall(
			chat_id : -1119783662815184583,
			call : $client->groupCallDiscarded(
				id : 2107104065762301977,
				access_hash : -6362395910568395073,
				duration : 15,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 2077834603942341159,
			),
			ttl_period : 65,
		),
		$client->updateChatParticipant(
			chat_id : 1392887759961531032,
			date : 57,
			actor_id : -4635195018193830232,
			user_id : -2679457620574606988,
			prev_participant : $client->chatParticipant(
				user_id : 4509388188085424706,
				inviter_id : -2617325394820717262,
				date : 77,
			),
			new_participant : $client->chatParticipant(
				user_id : 734812461570744323,
				inviter_id : -7116816759827927543,
				date : 82,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'nSC58fLja0HwIJut',
				admin_id : -4950037408146831845,
				date : 98,
				start_date : 14,
				expire_date : 9,
				usage_limit : 48,
				usage : 15,
				requested : 13,
				subscription_expired : 12,
				title : 'N3vuoEG08BKdtisb',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 22,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 7686763750050621312,
			date : 50,
			actor_id : -3902638848833122854,
			user_id : -175677567668658851,
			prev_participant : $client->channelParticipant(
				user_id : -2020518086071161486,
				date : 9,
				subscription_until_date : 90,
			),
			new_participant : $client->channelParticipant(
				user_id : -2581652492228086205,
				date : 2,
				subscription_until_date : 18,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'EKgYfTZUbSiRwOpN',
				admin_id : 8457321103221554301,
				date : 54,
				start_date : 37,
				expire_date : 75,
				usage_limit : 10,
				usage : 75,
				requested : 10,
				subscription_expired : 73,
				title : 'wME8ji6Tbp52rghY',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 7,
		),
		$client->updateBotStopped(
			user_id : -1424584929461530260,
			date : 57,
			stopped : true,
			qts : 13,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'jnOuC2UBgK7hpMGH',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -9158359180463031073,
			),
			bot_id : -5190175215927855129,
			commands : array(
				$client->botCommand(
					command : 'FEvOjDXWPSgwU4JZ',
					description : 'zQnhfR5FoVurY82I',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -3523249263873890943,
			),
			requests_pending : 72,
			recent_requesters : array(5656874779165590724),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -4609480434090756195,
			),
			date : 32,
			user_id : -9101559332521967296,
			about : 'XyGqYCmvLrJhgT9i',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'JQxg26j3tUion4u0',
				admin_id : 7782793473999296783,
				date : 58,
				start_date : 1,
				expire_date : 19,
				usage_limit : 43,
				usage : 79,
				requested : 9,
				subscription_expired : 94,
				title : 'a5KjTHZcbY8yIXrF',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 97,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 2852553880580414835,
			),
			msg_id : 68,
			top_msg_id : 93,
			saved_peer_id : $client->peerUser(
				user_id : 7811021918479253079,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 6147074894880368555,
		),
		$client->updateBotMenuButton(
			bot_id : -1677986789840316439,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -5471230151160262324,
			),
			msg_id : 4,
			transcription_id : -4447922137516020077,
			text : 'M0j1vqpAkdU3to8w',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -6041455672958387855,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -9082786273664717465,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -1303197396410198582,
			),
			msg_id : 80,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 53,
					h : 96,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 64,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : 3268266574520152997,
			topic_id : 55,
		),
		$client->updateChannelPinnedTopics(
			channel_id : -583626424917176175,
			order : array(25),
		),
		$client->updateUser(
			user_id : -1970298750196445048,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 3604858372986431096,
			),
			story : $client->storyItemDeleted(
				id : 60,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -8729938845784569954,
			),
			max_id : 20,
		),
		$client->updateStoryID(
			id : 62,
			random_id : -9082020139594465187,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 54,
				cooldown_until_date : 45,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 2775632922424437169,
			),
			story_id : 85,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 5279218459505783281,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'JOV6Bkt8TwZFxc2o',
				user_id : 5436177316916979129,
				giveaway_msg_id : 55,
				date : 76,
				expires : 16,
				used_gift_slug : 'ChT401yuaXViH2AB',
				multiplier : 37,
				stars : 6025339209751278237,
			),
			qts : 1,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 2649752807996300844,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 1331983856451842519,
			),
			wallpaper : $client->wallPaper(
				id : 5391174225721993788,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -898408968148877903,
				slug : 'J21PtFvZ7lmgNYri',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 7278556647008757381,
			),
			msg_id : 92,
			date : 68,
			actor : $client->peerUser(
				user_id : 543237480427135275,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'JaXscRt48qwbCozh',
				),
				$client->reactionCustomEmoji(
					document_id : -6973313903847822584,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'op89vq15xHXju6rz',
				),
				$client->reactionCustomEmoji(
					document_id : -3813184756623230446,
				),
				$client->reactionPaid(),
			),
			qts : 41,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 8815632734181591039,
			),
			msg_id : 67,
			date : 75,
			reactions : array(
				$client->reactionCount(
					chosen_order : 38,
					reaction : $client->reactionEmpty(...),
					count : 52,
				),
			),
			qts : 32,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 99,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'gyNY3bsa5SMpTKeD',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 25,
					shortcut : '2BO5keizL0GJpnDA',
					top_message : 64,
					count : 17,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 17,
				shortcut : 'OIxbsiDYjQJcqwEU',
				top_message : 19,
				count : 25,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 68,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 83,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 29,
			messages : array(70),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'iYugwG8WfkspCo0T',
				user_id : -1369417748295410926,
				dc_id : 70,
				date : 85,
				rights : $client->businessBotRights(...),
			),
			qts : 32,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'kpVohE7NzCi6qlmY',
			message : $client->messageEmpty(
				id : 70,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 46,
				peer_id : $client->peerUser(...),
			),
			qts : 20,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : '9X5bkcl7TpsfHWtR',
			message : $client->messageEmpty(
				id : 41,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 44,
				peer_id : $client->peerUser(...),
			),
			qts : 41,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'FrjaOkpmLBlfMJ5C',
			peer : $client->peerUser(
				user_id : 5929368874941826981,
			),
			messages : array(37),
			qts : 3,
		),
		$client->updateNewStoryReaction(
			story_id : 0,
			peer : $client->peerUser(
				user_id : 896955609956741582,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -2092987013814042102,
				nanos : 42,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 7347285782715492370,
			user_id : 546212942314492238,
			connection_id : 'bvHYfeF5md2j3xot',
			message : $client->messageEmpty(
				id : 40,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 76,
				peer_id : $client->peerUser(...),
			),
			chat_instance : -4789589396787557418,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -4237862219315818484,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 42,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 1074915599648627271,
			payload : 'ilcqLQ5DgfYsuaGB',
			qts : 66,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 59,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 5677664512112908486,
				access_hash : -4225160251145624121,
			),
			sub_chain_id : 18,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 83,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -3081632444451731795,
			saved_peer_id : $client->peerUser(
				user_id : 1336677283408230409,
			),
			read_max_id : 9,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -5959333850318521541,
			saved_peer_id : $client->peerUser(
				user_id : -3049253316806627227,
			),
			read_max_id : 74,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 1481354845398570420,
			saved_peer_id : $client->peerUser(
				user_id : 1622803884196359475,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : -8036407483082134006,
			text : 'kSCwiVN51IxOGfs8',
		),
		$client->updateBotSubscriptionExpire(
			user_id : 3805574305377113008,
			payload : 'os0OrPwceQtvDuBk',
			until_date : 81,
			qts : 42,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 3618031093963031997,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 3960764406693348330,
			title : 'TjPFlAX9J4Vs38fO',
			photo : $client->chatPhotoEmpty(),
			participants_count : 12,
			date : 69,
			version : 46,
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
				until_date : 63,
			),
		),
		$client->chatForbidden(
			id : -9060244035279730936,
			title : '6NFeqchLizwfSbX8',
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
			id : -633948935467636601,
			access_hash : -6727541883706862501,
			title : 'zDTKC30FMtXSbIg5',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 80,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'EMsT2i361IGapFQ9',
					reason : 'h8BzxFHtLkpTmKWG',
					text : 'MuPkt5EzQCnKlL1W',
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
				until_date : 80,
			),
			participants_count : 33,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 55,
			color : $client->peerColor(
				color : 70,
				background_emoji_id : -1673298940327181093,
			),
			profile_color : $client->peerColor(
				color : 80,
				background_emoji_id : -721354869263982981,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 14,
			subscription_until_date : 83,
			bot_verification_icon : -1334352520325254509,
			send_paid_messages_stars : -1889606835745441703,
			linked_monoforum_id : -8016615298147111744,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6894644973097892023,
			access_hash : 2757105988996834330,
			title : 'soe1FUYiSOJdv5CE',
			until_date : 58,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1590957017372415460,
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
			id : 8475771646393421315,
			access_hash : -2528080737373346619,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 14,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6E4WmwT9gCbNaLfO',
					reason : 'qd38mNMOIGZoLUjs',
					text : 'wjTaLHlSFPf7nkzR',
				),
			),
			bot_inline_placeholder : 'Ee5BAw1ir9HWvOop',
			lang_code : 'UfX4yT8hw0r7CqR5',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 55,
			color : $client->peerColor(
				color : 49,
				background_emoji_id : -4775785738061955998,
			),
			profile_color : $client->peerColor(
				color : 98,
				background_emoji_id : 7338181124475320029,
			),
			bot_active_users : 56,
			bot_verification_icon : 1294559782201707901,
			send_paid_messages_stars : -9006686659081902600,
		),
	),
);
```