# updatesCombined

**Description** : *Constructor for a group of updates*

**Layer** : 218

```tl
updatesCombined#725b04c3 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq_start:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq_start</mark> | [`int`](type/int) | Value seq for the earliest update in a group |
| <mark>seq</mark> | [`int`](type/int) | Value seq for the latest update in a group |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updatesCombined(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 66,
				peer_id : $client->peerUser(
					user_id : 4173651135537171136,
				),
			),
			pts : 31,
			pts_count : 84,
		),
		$client->updateMessageID(
			id : 30,
			random_id : -5541391422320283279,
		),
		$client->updateDeleteMessages(
			messages : array(6),
			pts : 9,
			pts_count : 68,
		),
		$client->updateUserTyping(
			user_id : 7515067630971093391,
			top_msg_id : 93,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -3104024852178143501,
			from_id : $client->peerUser(
				user_id : -2763670644869262845,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 490457925755954654,
				self_participant : $client->chatParticipant(
					user_id : 1509492734062435410,
					inviter_id : 3430562201754188464,
					date : 28,
				),
			),
		),
		$client->updateUserStatus(
			user_id : -2632195407357631089,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -7340563052990760167,
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
			date : 93,
			device : 'b7LoM9UP4iyKRZlm',
			location : 'ibHCOV7p8ocIMJWN',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 754689991851667874,
				chat_id : 15,
				date : 43,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 81,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 68,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 75,
			),
			date : 39,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 35,
			max_date : 44,
			date : 6,
		),
		$client->updateChatParticipantAdd(
			chat_id : -4057021642719310372,
			user_id : 5779473226350779005,
			inviter_id : -1103412043501089848,
			date : 48,
			version : 26,
		),
		$client->updateChatParticipantDelete(
			chat_id : -2218839249252280535,
			user_id : 7468646766620058918,
			version : 82,
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
					id : 53,
					ip_address : '127.0.0.1',
					port : 19,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : -8547860026119000585,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : true,
				mute_until : 7,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 49,
			type : 'P8W5rRB3e6S19CGV',
			message : 'k47cMWV09S1nwI5D',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 49,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 46,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 59,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 80,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 40,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 41,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 2,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 91,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 82,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 70,
					language : '0tnW7STv6h9RV1Jl',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 85,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 23,
					user_id : -7126542381453147405,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 31,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 88,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 16,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 2,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 42,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 18,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 22,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 18,
					document_id : 7554541342929059565,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 59,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(7753258079892736458),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(4157885957157129410),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(1695974010697771735),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(6966460264275682281),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -2581241602813126765,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 16,
			peer : $client->peerUser(
				user_id : 5984354160450847500,
			),
			top_msg_id : 47,
			max_id : 73,
			still_unread_count : 52,
			pts : 97,
			pts_count : 74,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 5211471733899835613,
			),
			max_id : 67,
			pts : 46,
			pts_count : 64,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -5380526277654568643,
				url : 'https://docs.liveproto.dev',
			),
			pts : 73,
			pts_count : 13,
		),
		$client->updateReadMessagesContents(
			messages : array(12),
			pts : 58,
			pts_count : 78,
			date : 86,
		),
		$client->updateChannelTooLong(
			channel_id : 3252407979466109962,
			pts : 79,
		),
		$client->updateChannel(
			channel_id : 2074721599450731298,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 38,
				peer_id : $client->peerUser(
					user_id : 6994929548030264835,
				),
			),
			pts : 12,
			pts_count : 32,
		),
		$client->updateReadChannelInbox(
			folder_id : 14,
			channel_id : 2157416136545998182,
			max_id : 55,
			still_unread_count : 91,
			pts : 12,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -4769646367793843826,
			messages : array(79),
			pts : 72,
			pts_count : 94,
		),
		$client->updateChannelMessageViews(
			channel_id : -1672755492684266732,
			id : 62,
			views : 36,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 447384390282199870,
			user_id : -4816950055154179786,
			is_admin : true,
			version : 95,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(
					archived : true,
					official : true,
					masks : true,
					emojis : true,
					text_color : true,
					channel_emoji_status : true,
					creator : true,
					installed_date : 14,
					id : -7304823261308258081,
					access_hash : 977663397725582949,
					title : 'wc9GKDndqZbL82Pv',
					short_name : 'AnEYyzOaWgLtTo3j',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 71,
					thumb_version : 80,
					thumb_document_id : -4010500623767576818,
					count : 54,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'yiUpgVvSwEseoXhZ',
						documents : array(2691496138864006284),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -3851784418667781543,
						keyword : array('6yrXVD1MjYchPko8'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : 7992389737156321825,
					),
					$client->document(
						id : -5507310242189265915,
						access_hash : -8557255690564306893,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 98,
						mime_type : 'tLVTJpFmoHWKGU96',
						size : 6990619392789392228,
						thumbs : array(
							$client->photoSizeEmpty(...),
							$client->photoSize(...),
							$client->photoCachedSize(...),
							$client->photoStrippedSize(...),
							$client->photoSizeProgressive(...),
							$client->photoPathSize(...),
						),
						video_thumbs : array(
							$client->videoSize(...),
							$client->videoSizeEmojiMarkup(...),
							$client->videoSizeStickerMarkup(...),
						),
						dc_id : 81,
						attributes : array(
							$client->documentAttributeImageSize(...),
							$client->documentAttributeAnimated(...),
							$client->documentAttributeSticker(...),
							$client->documentAttributeVideo(...),
							$client->documentAttributeAudio(...),
							$client->documentAttributeFilename(...),
							$client->documentAttributeHasStickers(...),
							$client->documentAttributeCustomEmoji(...),
						),
					),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(6060825333034858282),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -4603854967757199300,
			user_id : 4997067451246644431,
			query : 'Ll9Ow61iQ3C0tmu5',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'uhTDZlSIvKorYQpe',
		),
		$client->updateBotInlineSend(
			user_id : 7620865811585428745,
			query : '0zJeZGIP5hAjficm',
			geo : $client->geoPointEmpty(),
			id : 'V5KlxwoDJdUMGuyR',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 78,
				id : 868561303508483525,
				access_hash : 3503055191290739237,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 59,
				peer_id : $client->peerUser(
					user_id : -2006189824441511587,
				),
			),
			pts : 59,
			pts_count : 0,
		),
		$client->updateBotCallbackQuery(
			query_id : 7334495549380677474,
			user_id : -1830444175429536672,
			peer : $client->peerUser(
				user_id : 3677669355294272941,
			),
			msg_id : 73,
			chat_instance : 1369259477693209134,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'PBLF1REwOHQYtViZ',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 18,
				peer_id : $client->peerUser(
					user_id : -3317589762115800258,
				),
			),
			pts : 22,
			pts_count : 33,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 2030465620387629197,
			user_id : -7930263996361227098,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 41,
				id : -8992240917604460445,
				access_hash : 2675527970722659744,
			),
			chat_instance : 1023255358814497293,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'ZyQ4XV8hCxB0Raoz',
		),
		$client->updateReadChannelOutbox(
			channel_id : 421230678865422155,
			max_id : 67,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -4482140680245425359,
			),
			top_msg_id : 80,
			saved_peer_id : $client->peerUser(
				user_id : 3137669933593326480,
			),
			draft : $client->draftMessageEmpty(
				date : 71,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -173188924802578439,
			webpage : $client->webPageEmpty(
				id : -2011500309848054095,
				url : 'https://docs.liveproto.dev',
			),
			pts : 40,
			pts_count : 15,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 53,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 6971057328898252331,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 32,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -9074321262404507447,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 33,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'WkUZt57M4joEb1ix',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 3228290396634811012,
			data : $client->dataJSON(
				data : 'uwCJGoIKa3UTVl26',
			),
			timeout : 41,
		),
		$client->updateBotShippingQuery(
			query_id : 7157048523652155468,
			user_id : -5180131725197658411,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'r6nhquspDH2GX4Ft',
				street_line2 : '0xQ5isuPe4nZIEVb',
				city : 'mURo50bZJPkBplxL',
				state : 'omtxcRGvw5dHnh9p',
				country_iso2 : 'yLJZR47nu1PSgXNA',
				post_code : 'EVcpQYqmG6NPdnxh',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 34052943015221402,
			user_id : -8125485789283425393,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'picKSAPjNvXY2Go8',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'FWip9PZ6hgbJv2Sd',
					street_line2 : 'NxOwaXB1odhTsUI4',
					city : '8qoK4ymGZlQ7LXaB',
					state : 'koKlwzpySLxM71Y0',
					country_iso2 : 'L27YMvsrKhEBbPOm',
					post_code : '8BvHc3FNRYkTDiIo',
				),
			),
			shipping_option_id : 'ynjqDEJsbivdVFRt',
			currency : 'eyBmTrjIixpo52Cn',
			total_amount : -5415616391059351370,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 5790796848319064284,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'jZSMAtgEkzuH7O4n',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'j5STDIkVqeuW3BbJ',
				from_version : 54,
				version : 84,
				strings : array(
					$client->langPackString(
						key : 'rsmqBlIdcYTi4hUz',
						value : 'Q9bncWkZNdM432uV',
					),
					$client->langPackStringPluralized(
						key : 'VNL8uaZdfEOxko3p',
						zero_value : '3bAM9HTDic1WsUod',
						one_value : 'VLkFPMeXcJEZfq13',
						two_value : 'dZLPG0KHoD1Y9azp',
						few_value : '8H69LdnQplWNYzBO',
						many_value : 'yEWIZvK8UA1QDB9i',
						other_value : 'tsJu3EGczOW609Rm',
					),
					$client->langPackStringDeleted(
						key : 'GliX3nt5VKHhWAy6',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 8317124314115903013,
			top_msg_id : 70,
			saved_peer_id : $client->peerUser(
				user_id : 1543959517460852058,
			),
			messages : array(73),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -4936949629019757766,
			available_min_id : 39,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -6601260544790877715,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : 2183948949313440352,
			),
		),
		$client->updateMessagePoll(
			poll_id : 3300349105815017652,
			poll : $client->poll(
				id : -1374038195326875906,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'p9uFmGLjqPrUVKxC',
					entities : array(
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
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				close_period : 73,
				close_date : 73,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 73,
					),
				),
				total_voters : 69,
				recent_voters : array(
					$client->peerUser(
						user_id : -7778273368882733717,
					),
					$client->peerChat(
						chat_id : 2479848051186109583,
					),
					$client->peerChannel(
						channel_id : 8534044075255538336,
					),
				),
				solution : '645ViatsEZMmfPu9',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 26,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 79,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 12,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 84,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 85,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 41,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 29,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 5,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 21,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 93,
						language : 'KF0zMyhd86WX1oUC',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 77,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 56,
						user_id : -5926399912061384152,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 4,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 66,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 53,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 34,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 4,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 63,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 17,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 69,
						document_id : 1085171669990495508,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 99,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -2001151880214037227,
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
			version : 60,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : 8249122825997243956,
					),
					folder_id : 52,
				),
			),
			pts : 78,
			pts_count : 97,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -5628539048500167354,
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
				geo_distance : 15,
				request_chat_title : 'dWD7lR9vmPTXsA68',
				request_chat_date : 38,
				business_bot_id : -4510434221997524210,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -5385638942023514958,
				registration_month : 'DlxTI0CZ1bX5oHd9',
				phone_country : '+1234567890',
				name_change_date : 56,
				photo_change_date : 21,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : -9094010761132902639,
					),
					expires : 33,
					distance : 64,
				),
				$client->peerSelfLocated(
					expires : 81,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 79,
				peer_id : $client->peerUser(
					user_id : 1236684021433618908,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 148826526329403171,
			),
			messages : array(71),
			sent_messages : array(80),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -9028174196335791652,
				access_hash : -1751555265730545991,
				slug : 'xP6Ok5K4CtENLXVh',
				title : 'WCm9F7UDoK2glTk3',
				document : $client->documentEmpty(
					id : -1461851710149932552,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 12,
						outbox_accent_color : 60,
						message_colors : array(68),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : '57fdVzOkbvFwxHp6',
				installs_count : 82,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 2103680581435533904,
			),
			msg_id : 74,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -3434806983186502137,
			peer : $client->peerUser(
				user_id : -8391392614186435279,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 63,
		),
		$client->updateDialogFilter(
			id : 23,
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
				id : 57,
				title : $client->textWithEntities(
					text : 'rHbnASZlLEwDFvUC',
					entities : array(
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
				emoticon : 'dOgAZvLeSl78fYVs',
				color : 48,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(79),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 1977233441293058592,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -4512115550545251783,
			id : 43,
			forwards : 1,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 7761454289551842297,
			top_msg_id : 78,
			read_max_id : 10,
			broadcast_id : 26122222448553164,
			broadcast_post : 83,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 199876030010982047,
			top_msg_id : 0,
			read_max_id : 85,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -7826243160356010717,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 500015849497226763,
			top_msg_id : 76,
			from_id : $client->peerUser(
				user_id : -3470276945303511698,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 3933395912842983407,
			),
			messages : array(27),
			pts : 60,
			pts_count : 29,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -9101899830760365422,
			messages : array(16),
			pts : 4,
			pts_count : 73,
		),
		$client->updateChat(
			chat_id : 3861128803135756062,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -1137140560217781637,
				access_hash : 6556081414859897574,
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
					peer : $client->peerUser(
						user_id : -5134747684452683283,
					),
					date : 74,
					active_date : 35,
					source : 44,
					volume : 2,
					about : '8vC0yhk6NJZ2XpOG',
					raise_hand_rating : -8363083291247785380,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'cuU4zYG3o5KXIyBJ',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 95,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'F2sbgkYXl8cmNMnd',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 68,
					),
					paid_stars_total : 5015255222685055281,
				),
			),
			version : 0,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : 5891344845157186216,
			),
			call : $client->groupCallDiscarded(
				id : 4680717602194124369,
				access_hash : -452900695573440400,
				duration : 30,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -6120340057124286364,
			),
			ttl_period : 97,
		),
		$client->updateChatParticipant(
			chat_id : -1975194200165474641,
			date : 70,
			actor_id : 4220475483514368679,
			user_id : -8510792817927602433,
			prev_participant : $client->chatParticipant(
				user_id : 5836747243493041928,
				inviter_id : 1704091267098755840,
				date : 64,
			),
			new_participant : $client->chatParticipant(
				user_id : 5173277142042287742,
				inviter_id : 9089198115642432087,
				date : 37,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'Yp6o8TINalwAKi3g',
				admin_id : 5462428167364440988,
				date : 96,
				start_date : 71,
				expire_date : 72,
				usage_limit : 70,
				usage : 58,
				requested : 35,
				subscription_expired : 40,
				title : 'gsWK2pd6FQTRIrbt',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 81,
					amount : -5382459517849749197,
				),
			),
			qts : 36,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -5717901304371064679,
			date : 89,
			actor_id : -7414855631794166055,
			user_id : 8268095953502935101,
			prev_participant : $client->channelParticipant(
				user_id : 3822555297332642576,
				date : 38,
				subscription_until_date : 26,
			),
			new_participant : $client->channelParticipant(
				user_id : -2405409757267827025,
				date : 55,
				subscription_until_date : 27,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'mQTNMtbYz8Zq6oLE',
				admin_id : 7290424842269540465,
				date : 22,
				start_date : 97,
				expire_date : 5,
				usage_limit : 20,
				usage : 32,
				requested : 17,
				subscription_expired : 33,
				title : 'dp2UukOmwRiKJrqx',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 11,
					amount : 8799988650748394751,
				),
			),
			qts : 3,
		),
		$client->updateBotStopped(
			user_id : -7832120668779041469,
			date : 30,
			stopped : true,
			qts : 0,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'nptZIuUdB3fNS9Ci',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -3560948915876110992,
			),
			bot_id : -8923064145705344951,
			commands : array(
				$client->botCommand(
					command : 'dm7j9hBTCI8S1Ug3',
					description : 'q0s9ktyPEBJadiCN',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -7974177687466411034,
			),
			requests_pending : 58,
			recent_requesters : array(-7436246890555898902),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -1073759697976290310,
			),
			date : 61,
			user_id : -5534643345462008000,
			about : '4s1t6dNvj2J9W0Ri',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : '2aZp9DkqsituWFMX',
				admin_id : -328424797227240450,
				date : 12,
				start_date : 52,
				expire_date : 91,
				usage_limit : 15,
				usage : 56,
				requested : 41,
				subscription_expired : 93,
				title : 'zhRxcTdr7yZYP1ku',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 25,
					amount : 3693960134919568463,
				),
			),
			qts : 88,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -2115134268615579648,
			),
			msg_id : 52,
			top_msg_id : 35,
			saved_peer_id : $client->peerUser(
				user_id : -5565353246195648492,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 8,
						reaction : $client->reactionEmpty(...),
						count : 9,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 21,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 97,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -5825920783482116629,
		),
		$client->updateBotMenuButton(
			bot_id : 8000463197920052533,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 4414269302392174586,
			),
			msg_id : 7,
			transcription_id : -1681589730767137574,
			text : 'Po6YpRMfZsJlTOrG',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -7470537716766556945,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -9146197435537259816,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -5567397562823587847,
			),
			msg_id : 29,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 45,
					h : 43,
					thumb : $client->photoSizeEmpty(
						type : 'NadRIYzDx0kGgJZf',
					),
					video_duration : 54,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : 7206787616062353240,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 5391804494266599838,
			),
			story : $client->storyItemDeleted(
				id : 91,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -2097672593185982148,
			),
			max_id : 27,
		),
		$client->updateStoryID(
			id : 34,
			random_id : -309339744139786240,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 79,
				cooldown_until_date : 62,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 1114693210193797963,
			),
			story_id : 81,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -3796066350860695479,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'EO3jBFWwI5AGVakP',
				user_id : 7961006222894891846,
				giveaway_msg_id : 2,
				date : 75,
				expires : 12,
				used_gift_slug : '3beV9YsR4KUgMBoa',
				multiplier : 48,
				stars : -5097368450309224908,
			),
			qts : 54,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -6421422723495918735,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 9032850070077303941,
			),
			wallpaper : $client->wallPaper(
				id : -2050593176814809944,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 7962381256420989286,
				slug : 'UdESWqbmj0AY6xLz',
				document : $client->documentEmpty(
					id : 8893040249078207658,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 59,
					second_background_color : 56,
					third_background_color : 22,
					fourth_background_color : 5,
					intensity : 60,
					rotation : 66,
					emoticon : 'JtWozwdT6La0HC5y',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -5809906418601405301,
			),
			msg_id : 82,
			date : 28,
			actor : $client->peerUser(
				user_id : -3229501355705422104,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'ICb3BYaWF16fupMA',
				),
				$client->reactionCustomEmoji(
					document_id : -6488589707033003391,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'oLF2JxZMyrvb6tkd',
				),
				$client->reactionCustomEmoji(
					document_id : -6406116083792771471,
				),
				$client->reactionPaid(),
			),
			qts : 62,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 1470730771911954817,
			),
			msg_id : 20,
			date : 22,
			reactions : array(
				$client->reactionCount(
					chosen_order : 66,
					reaction : $client->reactionEmpty(),
					count : 11,
				),
			),
			qts : 5,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 2714157421585911114,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 2732264283290858152,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 52,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'NrBEnWV4eDQpmUxX',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 59,
					shortcut : 'nDMOSv3us02AZWHl',
					top_message : 82,
					count : 34,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 11,
				shortcut : 'ugQhX7AsNk14WMYC',
				top_message : 0,
				count : 55,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 20,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 40,
				peer_id : $client->peerUser(
					user_id : 4336721667933788840,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 79,
			messages : array(77),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'DRGxofm31pUN0TbV',
				user_id : 7956807096635934162,
				dc_id : 86,
				date : 13,
				rights : $client->businessBotRights(
					reply : true,
					read_messages : true,
					delete_sent_messages : true,
					delete_received_messages : true,
					edit_name : true,
					edit_bio : true,
					edit_profile_photo : true,
					edit_username : true,
					view_gifts : true,
					sell_gifts : true,
					change_gift_settings : true,
					transfer_and_upgrade_gifts : true,
					transfer_stars : true,
					manage_stories : true,
				),
			),
			qts : 50,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : '0Kdpf68DZqo2Vegt',
			message : $client->messageEmpty(
				id : 64,
				peer_id : $client->peerUser(
					user_id : -2518171544031101630,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 13,
				peer_id : $client->peerUser(
					user_id : -4100257201333081813,
				),
			),
			qts : 99,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'vmENlDA5rwUIS20y',
			message : $client->messageEmpty(
				id : 1,
				peer_id : $client->peerUser(
					user_id : -5559803803284534512,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 20,
				peer_id : $client->peerUser(
					user_id : -3588387244806303902,
				),
			),
			qts : 10,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'JmRCo7hcMyv3pWYK',
			peer : $client->peerUser(
				user_id : -7196030278559058443,
			),
			messages : array(83),
			qts : 98,
		),
		$client->updateNewStoryReaction(
			story_id : 11,
			peer : $client->peerUser(
				user_id : 5096575425316997153,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -2640873260774878060,
				nanos : 35,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -3640958456661450923,
			user_id : 2668151803398076917,
			connection_id : 'uK7xnik1VIWTZrEB',
			message : $client->messageEmpty(
				id : 33,
				peer_id : $client->peerUser(
					user_id : -4924886537879148480,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 11,
				peer_id : $client->peerUser(
					user_id : -4525732128007284990,
				),
			),
			chat_instance : 2517684146606768426,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 5769634461380663339,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : -1618864207188219746,
					nanos : 49,
				),
				available_balance : $client->starsAmount(
					amount : 7408944254741909162,
					nanos : 79,
				),
				overall_revenue : $client->starsAmount(
					amount : -2664356725739876684,
					nanos : 47,
				),
				next_withdrawal_at : 40,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 8941655238219702793,
			payload : '1wNLtUTYVAK0hZSs',
			qts : 77,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 17,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 76,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 5643155023724458791,
				access_hash : 1393418353264021514,
			),
			sub_chain_id : 56,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 62,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 8861476832438543191,
			saved_peer_id : $client->peerUser(
				user_id : 5514080300692583666,
			),
			read_max_id : 36,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -4619642745438197401,
			saved_peer_id : $client->peerUser(
				user_id : -2234162167687536718,
			),
			read_max_id : 92,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 4307582755852809077,
			saved_peer_id : $client->peerUser(
				user_id : 5880873521621027382,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 4337717333776750411,
				access_hash : 5516021381209454028,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 74,
				from_id : $client->peerUser(
					user_id : -1913984310237478386,
				),
				date : 78,
				message : $client->textWithEntities(
					text : 'JhN8gtbiKQXFHjzm',
					entities : array(
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
				paid_message_stars : 932662459537942987,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : 5466245816094532344,
				access_hash : -8066425396638262749,
			),
			from_id : $client->peerUser(
				user_id : -3585504386208074771,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : 7647908647708670000,
			),
			topic_id : 94,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -4114628698560931761,
			),
			order : array(95),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : 4937194278738851356,
				access_hash : 3049507125662484578,
			),
			messages : array(53),
		),
		$client->updateStarGiftAuctionState(
			gift_id : 8734323972659709670,
			state : $client->starGiftAuctionState(
				version : 57,
				start_date : 27,
				end_date : 44,
				min_bid_amount : 7452924690662357129,
				bid_levels : array(
					$client->auctionBidLevel(
						pos : 82,
						amount : 7729837883283981265,
						date : 25,
					),
				),
				top_bidders : array(-6842962183912982874),
				next_round_at : 62,
				gifts_left : 90,
				current_round : 22,
				total_rounds : 13,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : 2001031223068107375,
			text : '8QAWEVwLM7sfeczm',
		),
		$client->updateBotSubscriptionExpire(
			user_id : 8560465663055222260,
			payload : 'owklOrE7FR1sxqWU',
			until_date : 98,
			qts : 57,
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : -1981312340288345747,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : -8798550151495605598,
				bid_date : 96,
				min_bid_amount : 5716421478404006660,
				peer : $client->peerUser(
					user_id : -1005059530524776221,
				),
				acquired_count : 67,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -1712024788671992483,
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
			id : 7992635510374068372,
			access_hash : -4330190043698770755,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 84,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '5sKU79EWRHzIDBXM',
					reason : '1v367G4CYn9hPBuc',
					text : 'T56i1BkeFfNy7GKz',
				),
			),
			bot_inline_placeholder : 'gYG2eN50EsSTrln6',
			lang_code : 'CiE9shPVuQWbntkj',
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
				max_id : 97,
			),
			color : $client->peerColor(
				color : 64,
				background_emoji_id : 1514055694482958472,
			),
			profile_color : $client->peerColor(
				color : 8,
				background_emoji_id : 5165776668353600485,
			),
			bot_active_users : 56,
			bot_verification_icon : 635651376238936413,
			send_paid_messages_stars : -6519855615283764815,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7785483828714334501,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8645927813993229934,
			title : 'GEiyVKCPQ8I0rSLs',
			photo : $client->chatPhotoEmpty(),
			participants_count : 32,
			date : 69,
			version : 72,
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
				until_date : 80,
			),
		),
		$client->chatForbidden(
			id : 1544025909773805958,
			title : 'ho74pzCX8AjNIYaf',
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
			id : -3098427744363931564,
			access_hash : 6984907433439740965,
			title : 'UQctfZGzJ3E198HA',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 48,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tqQZy3gb271cOazj',
					reason : 'svHM18lgYfmux4hk',
					text : 'NyTWdDQp7uFeUtCq',
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
				until_date : 26,
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
				until_date : 90,
			),
			participants_count : 12,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 12,
			),
			color : $client->peerColor(
				color : 71,
				background_emoji_id : 1531177920760011541,
			),
			profile_color : $client->peerColor(
				color : 7,
				background_emoji_id : -4686137354558514319,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 50,
			subscription_until_date : 49,
			bot_verification_icon : 4350078835568995434,
			send_paid_messages_stars : 4902735769719350459,
			linked_monoforum_id : -7713634166917423185,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -4686919903717846417,
			access_hash : -1120985697117833507,
			title : 'LR9BvCijQ7KdlxEb',
			until_date : 46,
		),
	),
	date : 68,
	seq_start : 34,
	seq : 58,
);
```